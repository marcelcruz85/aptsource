<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Apartment Source</title>

    <!-- Vendors -->

    <!-- Material design colors -->
    <link href="/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="/vendors/bower_components/animate.css/animate.min.css">

    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="/vendors/bower_components/select2/dist/css/select2.min.css">

    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="/vendors/bower_components/nouislider/distribute/nouislider.min.css">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css">

    <!-- rateYo - Ratings -->
    <link rel="stylesheet" href="/vendors/bower_components/rateYo/src/jquery.rateyo.css">
    
    <!-- autocomplete -->
    <link rel="stylesheet" href="/vendors/bower_components/EasyAutocomplete/dist/easy-autocomplete.min.css">
    <link rel="stylesheet" href="/vendors/bower_components/EasyAutocomplete/dist/easy-autocomplete.themes.min.css">

    <!-- Site -->
    <link rel="stylesheet" href="/css/app_1.css">
    <link rel="stylesheet" href="/css/app_2.css">

    <!-- jQuery -->
    <script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>        

    <!-- Bootstrap -->
    <script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Page Loader JS -->
    <script src="/js/page-loader.min.js" async></script>
    
    @yield('head-scripts')
</head>

<body>
    <!-- Start page loader -->
    <div id="page-loader">
        <div class="page-loader__spinner"></div>
    </div>
    <!-- End page loader -->

    @yield ('header')


    @yield ('action-header')
    <section class="section">
        @yield ('content')
    </section>

    <footer id="footer">
        @include ('components.footer')
    </footer>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="ie-warning__inner">
                <ul class="ie-warning__download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->


    <!-- Javascript -->

    <!-- Waves button ripple effects -->
    <script src="/vendors/bower_components/Waves/dist/waves.min.js"></script>

    <!-- Select 2 - Custom Selects -->
    <script src="/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- wNumb -->
    <script src="/vendors/bower_components/wnumb/wNumb.js"></script>

    <!-- NoUiSlider -->
    <script src="/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jquery Number -->
    <script src="/vendors/bower_components/teamdf/jquery-number/jquery.number.min.js"></script>

    <!-- Jquery Simple Pagination -->
    <script src="/vendors/bower_components/simplePagination.js/jquery.simplePagination.js"></script>

    <!-- Jquery Auto Complete Plugin -->
    <script src="/vendors/bower_components/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js"></script>

    @yield ('script')    

    <!-- IE9 Placeholder -->
    <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

    <!-- Site functions and actions -->
    <script src="/js/app.js"></script>

    <!-- Demo only -->
    <script src="/js/demo/demo.js"></script>
</body>

</html>