<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Vendors -->

        <!-- Material design colors -->
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- NoUiSlider - Input Slider -->
        <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="css/app_1.css">
        <link rel="stylesheet" href="css/app_2.css">

        <!-- Page Loader JS -->
        <script src="js/page-loader.min.js" async></script>
    </head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header" class="header--minimal">
            @include ('components.top-header')

            @include ('components.main-header')
            
            @include ('components.search-header')
            
        </header>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>Our Featured Exclusives</h2>
                    <small>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small>
                </header>

                <div class="row listings-grid">
                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$1,175,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>21 Shop St, San Francisco</small>
                                    <h5>Integer tempor luctus maximus</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$1,200,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>Beverly Hills, CA 90210</small>
                                    <h5>Duis sollicitudin ante bibendum</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$910,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>132 04th St, San Francisco</small>
                                    <h5>Fusce quis libero nonorcious</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$2,542,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>132 Lockslee, San Francisco</small>
                                    <h5>Pellentesque habitant</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$823,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>San Francisco, CA 900212 </small>
                                    <h5>Maecenas sed purus lorem aliquet cursus</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$1,120,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>21120 Broadway St, San Fransisco</small>
                                    <h5>Maecenas sed purus at lorem</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$3,000,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>San Francisco, CA 937202</small>
                                    <h5>Nullam finibus libero at hendrerit</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xol-sm-4 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$1,175,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>4313 Beverly Hills, CA 90210</small>
                                    <h5>1358 Ligula Street, Unit 12</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section submit-ticker">            
            @include ('components.submit-ticker')
        </section>

        <section class="section info-box">
            @include ('components.info-box')
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

        <!-- jQuery -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Waves button ripple effects -->
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- NoUiSlider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="js/demo/demo.js"></script>
    </body>
</html>