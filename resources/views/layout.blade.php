<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Apartment Source</title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />

        {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121444877-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-121444877-1');
        </script> --}}

    <!-- Vendors -->

    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

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

      <!-- ... -->
  <script type="text/javascript" src="/vendors/bower_components/moment/min/moment.min.js"></script>

  <!-- Jquery Autosize -->
<script src="/vendors/bower_components/autosize/dist/autosize.min.js"></script>

 <script src='https://www.google.com/recaptcha/api.js'></script>

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

    <div class="email-success-modal modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <p><i class="fa fa-check-circle"></i></p>
                <p>Thank You. </p>
                <p>Your message has been successfully sent.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-close btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

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
<script>
    $(function() { 
        console.log('estamoready');
        $('.modal-close').click(function(){
            console.log('se cerro la ventana');
            if($("form").hasClass("submit_property_form")){
                window.location.replace("/");
            }
        });   

        $( '.email-form' ).click( function(e) {  
            var event = e;  
            var requiredField = "";    
            e.preventDefault();
            //validating recaptcha
            var response = grecaptcha.getResponse();

                $('.field-required').each(function(){
                    if( $.trim($(this).val()) == "") {
                        requiredField = "empty";
                        return false;
                    }else{
                        $('.required-text').hide();
                        requiredField = "filled";
                    }
                
                });  

                if ($('.submit_accept').length){
                    console.log('Exist');
                    if($('.submit_accept').is(":checked")){
                        console.log('is checked');
                    }else{
                        console.log('is not checked');
                        requiredField = "empty";
                    }
                }
            
            console.log(requiredField);

            if(response.length == 0){
                $( ".errors" ).html( "<p>Please, verify that you are a human!</p>" );
            }else if(requiredField == "empty" && response.length != 0){
                $( ".errors" ).html( "" );
                $('.required-text').show();           
            }else{

                $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: '/email',
                            data: $('.contact-email').serialize(),
                            success: function(msg) {
                                grecaptcha.reset();
                                $('.email-success-modal').modal('show')  
                                $( ".errors" ).html( "<p></p>" );   $('.contact-email').find("input[type=text], textarea").val("");
                                console.log(msg);
                            }
                        });              
            }
        });
    });
</script>

    <!-- Waves button ripple effects -->
    <script src="/vendors/bower_components/Waves/dist/waves.min.js"></script>

    <!-- Select 2 - Custom Selects -->
    <script src="/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- NoUiSlider -->
    <script src="/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- wNumb -->
        <script src="/vendors/bower_components/wnumb/wNumb.js"></script>
        
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