<?php

namespace extras\plugins\mpesa;

use App\Helpers\Number;
use App\Models\Post;
use App\Models\PaymentMethod;
use App\Helpers\Payment;
use App\Models\Package;
use Carbon\Carbon;
// random string generator
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use extras\plugins\paypal\Paypal;
use Safaricom\Mpesa as MpesaApi;
use Twilio\TwiML\Voice\Pay;

class Mpesa extends Payment
{
	/**
	 * show mpesa collection page
	 *
	 * @return void
	 */
	public static function generate_mpesa_access_tokens()
	{
		$consumerKey = 'IQ7JnAOPaCLGJOwGdDBin1Ohc5nTkMb7';
		$consumerSecret = 'eH6sYh1STGwd74cp';
		$credential = base64_encode($consumerKey . ':' . $consumerSecret);
		$url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credential)); //setting a custom header
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$curl_response = curl_exec($curl);
		$access_token = json_decode($curl_response);
		return $access_token->access_token;
	}

	/**
	 * generate password
	 *
	 * @param integer $timestamp
	 * @return void
	 */
	public static function lipaNaMpesaPassword(int $timestamp, $credentials)
	{
		$passkey = $credentials['passKey'];
		$BusinessShortCode = $credentials['shortcode'];
		$lipa_na_mpesa_password = base64_encode($BusinessShortCode . $passkey . $timestamp);
		return $lipa_na_mpesa_password;
	}

	/**
	 * Send Payment
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Post $post
	 * @param array $resData
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function sendPayment(Request $request, Post $post, array $resData = [])
	{
		// Set the right URLs
		parent::setRightUrls($resData);

		// Get the Package
		$package = Package::find($request->input('package_id'));

		if($request->payment_method_id === "1")
		{
			return Paypal::sendPayment($request, $post, $resData);
			dd("Can't make a payment with Mpesa, sendPayment method is not yet implemented.");
		}

		// Don't make a payment if 'price' = 0 or null
		if (empty($package) || $package->price <= 0) {
			return redirect(parent::$uri['previousUrl'] . '?error=package')->withInput();
		}

		// Get the amount
		$amount = Number::toFloat($package->price);
		$rawPhone = $request->input('mpesa_phone_number'); // 0712345678
		$phone = substr($rawPhone, 1); // 712345678
		$phone = '254' . $phone; // 254712345678
		// Make the C2B payment request STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks)

		// API Parameters
		$BusinessShortCode = 174379;
		$LipaNaMpesaPasskey = 'b2btest';
		$TransactionType = 'CustomerPayBillOnline';
		$Amount = $amount;
		$PartyA = $phone;
		$PartyB = 174379;
		$PhoneNumber = $phone;
		$CallBackURL = $_ENV['APP_URL'];
		$AccountReference = 'CompanyXLTD';
		$TransactionDesc = 'Payment of X';
		$Remarks = 'test';
		try {
			$response = Mpesa::sendSTKPushSimulation(
				$BusinessShortCode,
				$LipaNaMpesaPasskey,
				$TransactionType,
				$Amount,
				$PartyA,
				$PartyB,
				$PhoneNumber,
				$CallBackURL,
				$AccountReference,
				$TransactionDesc,
				$post
			);

			// Check if the payment request was successful
			if (isset($response?->ResponseCode) && $response?->ResponseCode == 0) {

				// Local Parameters
				$localParams = [
					'payment_method_id' => $request->input('payment_method_id'),
					'post_id'           => $post->id,
					'package_id'        => $package->id,
					'amount'            => $amount,
					'currency_code'     => $package->currency_code,
					'transaction_id'    => $response?->CheckoutRequestID,
				];
				// Save local parameters into session
				session()->put('params', $localParams);
				session()->save(); // If redirection to an external URL will be done using PHP header() function
				// Payment request was successful
				// Perform necessary actions for a successful payment
				// add a timeout to kill the session after 5 minutes with message to try again
				session()->put('timeout', time() + 300);
				session()->save();
				
				// Get the transaction status
				$transactionStatus = Mpesa::stkPushQuery($response?->CheckoutRequestID, $post, $localParams); // returns json response
				// Redirect the client to the success page
			} else {
				// Payment request failed
				// Perform necessary actions for a failed payment
				// Redirect the client to the failure page
				// Apply actions when Payment failed
		
				return parent::paymentFailureActions($post, 'Unable to complete the payment.');
				
			}
		} catch (\Exception $e) {
		
			throw $e;

		}
	}

	/**
	 * @param $params
	 * @param $post
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public static function paymentConfirmation($params, $post)
	{
		// Set form page URL
		parent::$uri['previousUrl'] = str_replace(['#entryToken', '#entryId'], [$post->tmp_token, $post->id], parent::$uri['previousUrl']);
		parent::$uri['nextUrl'] = str_replace(['#entryToken', '#entryId', '#entrySlug'], [$post->tmp_token, $post->id, $post->slug], parent::$uri['nextUrl']);

		// Get Transaction ID
		$transactionId = $params['transaction_id'] ?? null;

		// Try to query the STK transaction
		try {
			// Set up M-Pesa parameters
			$checkoutRequestID = 'YOUR_CHECKOUT_REQUEST_ID';
			$businessShortCode = 'YOUR_BUSINESS_SHORT_CODE';
			$password = 'YOUR_PASSWORD';
			$timestamp = 'YOUR_TIMESTAMP';

			// Make the STK push status query
			$response = Mpesa::STKPushQuery($checkoutRequestID, $businessShortCode, $password, $timestamp);

			// Check if the query was successful
			if (isset($response['ResponseCode']) && $response['ResponseCode'] == '0') {
				// Query was successful
				// Perform necessary actions for a successful query

				// Apply actions after successful query
				return parent::paymentConfirmationActions($params, $post);
			} else {
				// Query failed

				// Perform necessary actions for a failed query

				// Apply actions when query failed
				return parent::paymentFailureActions($post);
			}
		} catch (\Exception $e) {
			// Apply actions when the API failed
			return parent::paymentApiErrorActions($post, $e);
		}
	}

	public static function executeMpesaQuery($postData)
	{
		$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query');
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . Mpesa::generate_mpesa_access_tokens(),
			'Content-Type: application/json'
		]);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response);
	}

	public static function stkPushQuery($checkoutRequestID, $post, $localParams)
	{
		try {
			$credentials = [
				"consumerKey" => "IQ7JnAOPaCLGJOwGdDBin1Ohc5nTkMb7",
				"consumerSecret" => "eH6sYh1STGwd74cp",
				"passKey" => "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",
				"shortcode" => "174379",
			];

			$timestamp = Carbon::Parse('now')->format('YmdHis');
			$password = Mpesa::lipaNaMpesaPassword($timestamp, $credentials);

			$postData = [
				'BusinessShortCode' => '174379',
				'Password' => $password,
				'Timestamp' => $timestamp,
				'CheckoutRequestID' => $checkoutRequestID
			];
			$responseObj = Mpesa::executeMpesaQuery($postData);
			$responseCode = $responseObj->ResultCode ?? $responseObj->errorCode ?? null;

			if ($responseCode === 0) {
				$responseDescription = $responseObj->ResultDesc;
			}
				if (isset($responseObj->errorCode) && $responseObj->errorCode == '500.001.1001') {
					// Retry querying the transaction
					return Mpesa::stkPushQuery($checkoutRequestID, $post, $localParams);
				} else {
					if (isset($responseObj->ResultCode) && $responseObj->ResultCode == '0') {
						$resData = [
							'checkoutRequestID' => $checkoutRequestID,
							'message' => $responseObj->ResultDesc,
							'code' => $responseCode,
						];
						// Redirect the client to the success page
						return parent::paymentConfirmationActions($localParams, $post, $resData);
					} else {
						// Payment request failed
						// Perform necessary actions for a failed payment
						// Redirect the client to the failure page
						// Apply actions when Payment failed
						return parent::paymentFailureActions($post, 'Unable to complete the payment.' . $responseObj->errorMessage);
					}
				}
			
			
		} catch (\Exception $e) {
				return parent::paymentFailureActions($post, 'Unable to complete the payment.');
			// Handle any exceptions or errors

			// You can log the error or perform error handling actions
			// For example, you can throw a custom exception or return an error response

		}
	}

	/**
	 * Send STK Push Simulation
	 *
	 * @param string $BusinessShortCode
	 * @param string $LipaNaMpesaPasskey
	 * @param string $TransactionType
	 * @param string $Amount
	 * @param string $PartyA
	 * @param string $PartyB
	 * @param string $PhoneNumber
	 * @param string $CallBackURL
	 * @param string $AccountReference
	 * @param string $TransactionDesc
	 * @param string $Remarks
	 * @return array|null
	 * @throws \Exception
	 */
	public static function sendSTKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $post)
	{
		$credentials = [
			"passKey" => "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",
			"shortcode" => "174379",
		];


		// Make the STK Push simulation request
		try {
			// generate access token
			$access_token = Mpesa::generate_mpesa_access_tokens();
			$timestamp = Carbon::Parse('now')->format('YmdHis');
			$password = Mpesa::lipaNaMpesaPassword($timestamp, $credentials);
			$amount = $Amount;
			$phoneNumber = $PhoneNumber;
			$transactionDescription = $TransactionDesc;
			$callbackUrl = $CallBackURL;
			$shortCode = $credentials['shortcode'];
			$accountReference = $AccountReference;
			$transactionType = $TransactionType;
			$postData = [
				'BusinessShortCode' => $BusinessShortCode,
				'Password' => $password,
				'Timestamp' => $timestamp,
				'TransactionType' => $transactionType,
				'Amount' => 1,
				'PartyA' => $phoneNumber,
				'PartyB' => $shortCode,
				'PhoneNumber' => $phoneNumber,
				'CallBackURL' => $callbackUrl,
				'AccountReference' => Str::random(10),
				'TransactionDesc' => $transactionDescription
			];

			$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				'Authorization: Bearer ' . $access_token,
				'Content-Type: application/json'
			]);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response     = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response);
			return $response;
		} catch (\Exception $e) {

			dd('STK push simulation failed: ' . $e->getMessage());
		}
	}

	/**
	 * @return array
	 */
	public static function getOptions(): array
	{
		$options = [];

		$paymentMethod = PaymentMethod::active()->where('name', 'mpesa')->first();
		if (!empty($paymentMethod)) {
			$options[] = (object)[
				'name'     => mb_ucfirst(trans('admin.settings')),
				'url'      => admin_url('payment_methods/' . $paymentMethod->id . '/edit'),
				'btnClass' => 'btn-info',
			];
		}

		return $options;
	}

	/**
	 * @return bool
	 */
	public static function installed(): bool
	{
		$cacheExpiration = 86400; // Cache for 1 day (60 * 60 * 24)

		return cache()->remember('plugins.paypal.installed', $cacheExpiration, function () {
			$paymentMethod = PaymentMethod::active()->where('name', 'paypal')->first();
			if (empty($paymentMethod)) {
				return false;
			}

			return true;
		});
	}

	/**
	 * @return bool
	 */
	public static function install(): bool
	{
		// Remove the plugin entry
		self::uninstall();

		// Plugin data
		$data = [
			'id'                => 1,
			'name'              => 'mpesa',
			'display_name'      => 'Mpesa',
			'description'       => 'Payment with Mpesa',
			'has_ccbox'         => 0,
			'is_compatible_api' => 0,
			'countries'         => null,
			'lft'               => 0,
			'rgt'               => 0,
			'depth'             => 1,
			'active'            => 1,
		];

		try {
			// Create plugin data
			$paymentMethod = PaymentMethod::create($data);
			if (empty($paymentMethod)) {
				return false;
			}
		} catch (\Throwable $e) {
			return false;
		}

		return true;
	}

	/**
	 * @return bool
	 */
	public static function uninstall(): bool
	{
		try {
			cache()->forget('plugins.mpesa.installed');
		} catch (\Throwable $e) {
		}

		$paymentMethod = PaymentMethod::where('name', 'mpesa')->first();
		if (!empty($paymentMethod)) {
			$deleted = $paymentMethod->delete();
			if ($deleted > 0) {
				return true;
			}
		}

		return false;
	}
}