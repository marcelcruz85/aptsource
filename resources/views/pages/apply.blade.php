@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
</header>

@endsection 


@section ('content')

<!-- content here -->
        <div class="container">
<header class="section__title section__title-alt">
    <h2>Online Application</h2>
</header>
    <div class="col-md-1"></div>
    <a href="/rent-application" class="col-md-5 application-button"><i class="fas fa-building"></i><br/>Rent Application</a>
    <a href="/cosigner-application" class="col-md-5 application-button"><i class="fas fa-edit"></i><br/>Cosigner Application</a>
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