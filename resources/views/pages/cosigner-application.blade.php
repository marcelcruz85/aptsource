@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') @include ('components.main-header')
</header>

@endsection 


@section ('content')

<!-- content here -->
<header class="section__title section__title-alt">
    <h2>Online Application</h2>
</header>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <script type="text/javascript" src="https://apartmentsourcechicago.formstack.com/forms/js.php/rent_application"></script><noscript><a href="https://apartmentsourcechicago.formstack.com/forms/rent_application" title="Online Form">Online Form - Rent Application</a></noscript><div style="text-align:right; font-size:x-small;"><a href="http://www.formstack.com?utm_source=jsembed&utm_medium=product&utm_campaign=product+branding&fa=h,3167673" title="Powered by Formstack">Powered by Formstack</a></div>web

    </div>
</div>


@endsection

@section('script')

<script>
    $(function () {
        $('#tabs')
                .tabs()
                .addClass('ui-tabs-vertical ui-helper-clearfix');

        $('#stripe-form').get(0).submit = function(){
            console.log('forms have been submitted');
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        // stripeToken: response.id
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '/apply',
                    data: new FormData($("#stripe-form")[0]),
                    // data: $("#stripe-form").serialize(),
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (msg) {
                        //alert(msg);
                        if(msg == 'Approved'){
                            $('.submit-application').show();
                            $('#stripe-form button').hide();
                        }
                    }
                });

            return false;
        }

        $('#save-application').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: '/online-application',
                    data: new FormData($("#online-application-form")[0]),
                    // data: $('.contact-email').serialize(),
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (msg) {
                        alert('Application have been save');
                        console.log(msg);
                    }
                });
        });
    });
</script>
<!-- Slick Carousel - Custom Alerts -->
<script src="/vendors/bower_components/slick-carousel/slick/slick.min.js"></script>
    
<!-- Jquery Light Gallery -->    
<script src="/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>

<!-- rateYo - Ratings -->
<script src="/vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

<!-- jsSocials - Social link sharing -->
<script src="/vendors/bower_components/jssocials/dist/jssocials.min.js"></script>


@endsection