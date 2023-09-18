<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="canonical" href="{{ request()->fullUrl() }}"/>
    <title>More Classifieds | Your partner in all your advertisment and classifieds needs</title>
    <!-- theme-color:#ff4a17 -->
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#f65016" />
    <meta name="description"
        content="Discover a world of exclusive deals and unique products at Your Website Name. Explore a curated selection of top-notch items, from rare collectibles to cutting-edge gadgets, all in one place. Join our community of savvy shoppers and sellers today!" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="More Home page">
    <meta property="og:description"
        content="Discover a world of exclusive deals and unique products at Your Website Name. Explore a curated selection of top-notch items, from rare collectibles to cutting-edge gadgets, all in one place. Join our community of savvy shoppers and sellers today!.">
    <meta property="og:image" content="assets/images/more.jpeg">
    <meta property="og:url" content="https://www.more.co.ke">
    <meta name="keywords"
        content="unleash the extraordinary, discover, explore, experience, hidden treasures, unique products, exclusive deals, exceptional services">
    
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/home/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/home/css/animate.css" />
    <link rel="stylesheet" href="assets/home/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/home/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/home/css/main.css" />
    <link rel="shortcut icon" href="{{ config('settings.app.favicon_url') }}">
	<title>{!! MetaTag::get('title') !!}</title>
	{!! MetaTag::tag('description') !!}{!! MetaTag::tag('keywords') !!}
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" defer></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "59de1575-d794-4713-80b8-96d3e1224688",
                safari_web_id: "web.onesignal.auto.3cd6b41f-0715-4da8-9007-02ca4af2dc44",
                notifyButton: {
                    enable: true,
                },
            });
        });
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2631503418546251"
        crossorigin="anonymous"></script>

</head>
<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">

            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href={{ url('/') }}>
                                <img src="{{ config('settings.app.logo_url') }}" alt="Logo" height="50px" width="50px" style="padding: 5px; background-color: #fff; margin-top: 10px;">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">

                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <!--
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class=" active dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item active"><a href={{ url('/') }}>Home Default</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Home Version 2</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Home Version 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" aria-label="Toggle navigation">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Listings</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="javascript:void(0)">Ad Grid</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Ad Listing</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Ad Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-5" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-5">
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Grid Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Single</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Single
                                                    Sibebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                -->
                            </div> <!-- navbar collapse -->
                            <div class="login-button">
                                <ul>
                                    <li><a href="{{ \App\Helpers\UrlGen::searchWithoutQuery() }}">
                                            <i class="lni lni-list"></i>
                                            Listings</a></li>
                                    <li><a href="https://more.co.ke/pricing/">
                                            <i class="lni lni-dollar"></i>
                                            Pricing</a></li>
                                    @if (Auth::check())
                                        <li><a href="{{ url('account') }}">
                                                <i class="lni lni-user"></i>

                                                {{ auth()->user()->name }}</a></li>
                                    @else
                                        <li>
                                            <a href="{{ \App\Helpers\UrlGen::login() }}"><i class="lni lni-enter"></i>
                                                Login</a>
                                        </li>
                                        <li>
                                            <a href="{{ \App\Helpers\UrlGen::register() }}"><i class="lni lni-user"></i>
                                                Register</a>
                                        </li>
                                    @endif
                                    @includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.menu.select-language', 'layouts.inc.menu.select-language'])


                                </ul>
                            </div>
                            <div class="button header-button">
                                <a href="https://more.co.ke/posts/create" class="btn">Got something to Sell? Post
                                    it Here</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->
    <?php
    $curl = curl_init();
    $url = 'https://more.co.ke/api/categories?parentId=0&nestedIncluded=0&embed=children&sort=-lft&perPage=10&page=1';
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json', 'Content-Language: en', 'X-AppApiToken:ejRzeVNrUmFWcWkyRG0wOHNtVDMxUk51ck5SMlpuYzU=', 'X-AppType: docs'],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    if ($err) {
        echo 'cURL Error #:' . $err;
    } else {
        $response = json_decode($response, true);
        $categories = $response['result']['data'];
    }
    curl_close($curl);
    ?>

    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Welcome to More Classifieds</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Buy And Sell Everything Anywhere Anytime with
                                ease and freedom on MORE</p>
                        </div>
                        
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <form method="get" action="#" class="search-form wow fadeInUp" data-wow-delay=".3s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                        <input type="text" name="keyword" id="keyword"
                                            placeholder="Product keyword" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                                        <select name="category" id="category">
                                            <option value="none" selected disabled>Categories</option>
                                            <?php
                                            foreach ($categories as $category) {
                                                echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                                        <input type="text" name="location" id="location" placeholder="Where" autocomplete />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn" type="submit">
                                            <i class="lni lni-search-alt"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <script>
                            $(document).ready(function() {
                                $('.search-form').submit(function(event) {
                                    event.preventDefault();

                                    const keyword = $('#keyword').val();
                                    const category = $('#category').val();
                                    const location = $('#location').val();

                                    const baseUrl = 'https://more.co.ke/search';
                                    const params = new URLSearchParams({
                                        c: category,
                                        q: keyword,
                                        r: '',
                                        l: '',
                                        location: location
                                    });

                                    const url = baseUrl + '?' + params.toString();

                                    window.location.href = url;
                                });
                            });
                        </script>

                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->


    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12 p-0">
                        <p>Browse by category</p>
                        <div class="category-slider">
                            <?php
                            
                            if ($err) {
                                echo 'cURL Error #:' . $err;
                            } else {
                                foreach ($categories as $category) {
                                    $baseUrl = 'https://more.co.ke';
                                    $icon = $category['icon_class'];
                                    echo '<a href="' .
                                        $baseUrl .
                                        "/category/" .
                                        $category['slug'] .
                                        '" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                                                                    <div class="icon">
                                                                        <i class="' .
                                        $icon .
                                        '"></i>
                                                                    </div>
                                                                    <h3>' .
                                        $category['name'] .
                                        '</h1>
                                                                </a>';
                                }
                            }
                            
                            ?>


                            <!-- End Single Cat -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <!-- Start Items Grid Area -->
    <section class="items-grid section custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6 class="wow fadeInUp" data-wow-delay=".1s"
                        style="font-size: 20px; font-weight: 600; color: #f65016; text-align: center; margin-bottom: 10px;"
                        >We are giving 30 days premium listing for all for thirty days beginning  15th Aug 2023.</h1>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Latest Products</h2>
                        <p class="wow fadeInUp" data-wow-delay=".3s">Here are some of the latest products posted on
                            our platform.</p>
                    </div>
                </div>
            </div>
            <?php
            $curl = curl_init();
            $url = 'https://more.co.ke/api/posts?op=latest&perPage=9&page=1&embed=city';
            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json', 'Content-Language: en', 'X-AppApiToken:ejRzeVNrUmFWcWkyRG0wOHNtVDMxUk51ck5SMlpuYzU=', 'X-AppType: docs'],
            ]);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            $response = json_decode($response, true);
            $items = $response['result']['data'];
            curl_close($curl);
            
            ?>


            <div class="single-head wow fadeInUp" data-wow-delay=".2s">
                <div class="row">
                    <!-- Php loop -->
                    <?php
                    foreach ($items as $item) {
                        echo '<div class="col-lg-4 col-md-6 col-12">
                                                <!-- Start Single Grid -->
                                                <div class="single-grid wow fadeInUp" data-wow-delay=".4s">
                                                    <div class="image">
                                                        <a href="' .
                            $item['url'] .
                            '" class="thumbnail" style="min-height: 300px; max-height: 300px; justify-content: center; align-items: center; display: flex;">
                                                            <img src="' .
                            $item['picture']['url']['full'] .
                            '" alt="' .
                            $item['title'] .
                            '" style="max-height: 200px;  object-fit: contain;">
                                                        </a>
                                                        <div class="author">
                                                            <div class="author-image">
                                                                <a href="javascript:void(0)"><img src="' .
                            $item['user_photo_url'] .
                            '" alt="#">
                                                                    <span>
                                                                    ' .
                            $item['contact_name'] .
                            '
                                                                    </span></a>
                                                            </div>
                                                            <p class="sale">For Sale</p>
                                                           
                                                        </div>
                                                        ' .
                            ($item['featured'] ? '<p class="item-position"><i class="lni lni-bolt"></i> Featured</p>' : '') .
                            '
                                                    </div>
                                                    <div class="content">
                                                        <div class="top-content">
                                                            <a href="' .
                            $item['url'] .
                            '" class="tag">' .
                            $item['category']['name'] .
                            '</a>
                                                            <h3 class="title">
                                                                <a href="' .
                            $item['url'] .
                            '">' .
                            $item['title'] .
                            '</a>
                                                            </h3>
                                                            <ul class="info-list">
                                                                <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> ' .
                            $item['city']['name'] .
                            '</a></li>
                                                                <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> ' .
                            (new DateTime($item['created_at']))->format('d M, Y') .
                            '</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <p class="price">Start From: <span>' .
                            $item['currency_code'] .
                            ' "Kes ' .
                            number_format($item['price']) .
                            '</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Grid -->
                                            </div>';
                    }
                    ?>


                    <!-- End Single Grid -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /End Items Grid Area -->




    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12"
                        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <!-- Single Widget -->
                        <div class="single-footer mobile-app">
                            <div class="logo" style="margin-left: 15px; margin-bottom: 15px">
                                <a href="/">
                                    <img src="https://more.co.ke/home/LOGO.jpg" alt="more"
                                        style="width: 110px; height: 60px;">
                                </a>
                            </div>
                            <div class="app-button">

                                <ul class="footer-social"
                                    style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding-right: 120px; font-size: 28px;">
                                    <li><a href="https://www.facebook.com/profile.php?id=100095028500208"><i
                                                class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="https://twitter.com/MoreClassifieds/status/1684123103599755264?s=20"><i
                                                class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="http://www.linkedin.com/in/more-classifieds-293244285"><i
                                                class="lni lni-linkedin-original"></i></a></li>
                                </ul>

                                <a href="https://play.google.com/store/apps/details?id=webviewgold.moreapp" class="btn col-6">
                                    <i class="lni lni-play-store"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        Google Play
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn col-6">
                                    <i class="lni lni-apple"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        App Store
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>About Us</h3>
                            <ul>
                                <li><a href="https://more.co.ke/page/About">About Us</a></li>
                                <li><a href="https://more.co.ke/page/How to Make Money">How to make Money</a></li>
                                <li><a href="https://more.co.ke/page/anti-scam">Anti-scam</a></li>
                                <li><a href="https://more.co.ke/page/faq">Faqs</a></li>
                                <li><a href="https://more.co.ke/page/terms">Terms of use</a></li>
                                <li><a href="https://more.co.ke/page/privacy"> Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Contact & Sitemap</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="https://more.co.ke/sitemap">Sitemap</a></li>
                                        <li><a href="https://more.co.ke/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Account</h3>
                            <ul>
                                <li><a href="https://more.co.ke/login">Login</a></li>
                                <li><a href="https://more.co.ke/register">Register</a></li>
                                <li><a href="https://more.co.ke/pricing">Pricing</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="content"
                            style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; color: #fff; padding: 15px;">
                            <p class="copyright-text">&copy; 2023
                                <a href="https://more.co.ke/" rel="nofollow" target="_blank">More
                                    Classifieds</a>.&nbsp;
                                All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/home/js/bootstrap.min.js"></script>
    <script src="assets/home/js/wow.min.js"></script>
    <script src="assets/home/js/tiny-slider.js"></script>
    <script src="assets/home/js/glightbox.min.js"></script>
    <script src="assets/home/js/main.js"></script>


    <script type="text/javascript">
        tns({
            container: '.category-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 3,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                1170: {
                    items: 6,
                }
            }
        });
    </script>
</body>

</html>
