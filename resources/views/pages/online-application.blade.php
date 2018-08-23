@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') @include ('components.main-header')
</header>

@endsection 


@section ('content')

<!-- content here -->
<section class="section">
        <div class="container">
<header class="section__title section__title-alt">
    <h2>Online Application</h2>
</header>
<div>
    <div class="col-md-1"></div>
    <div>
    <script type="text/javascript" src="https://apartmentsourcechicago.formstack.com/forms/js.php/rent_application"></script><noscript><a href="https://apartmentsourcechicago.formstack.com/forms/rent_application" title="Online Form">Online Form - Rent Application</a></noscript><div style="text-align:right; font-size:x-small;"><a href="http://www.formstack.com?utm_source=jsembed&utm_medium=product&utm_campaign=product+branding&fa=h,3167673" title="Powered by Formstack">Powered by Formstack</a></div>web

    </div>

    <div class="col-md-1"></div>
</div>
</div>
</section>


@endsection

@section('script')

<script>
    $(function () {
        
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