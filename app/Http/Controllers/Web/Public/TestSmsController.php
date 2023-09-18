<?php

namespace App\Http\Controllers\Web\Public;

use App\Notifications\AfricaTalking;
use App\Notifications\AfricaTalkingTest;
use App\Notifications\ExampleSms;
use Illuminate\Support\Facades\Notification;

class TestSmsController
{
    public function smsMessage()
    {
        $message = 'This is a test message';
        Notification::route('africa_talking', '254798184724')->notify(new ExampleSms());

    }
}
