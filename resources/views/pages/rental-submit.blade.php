@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') @include ('components.main-header')
</header>

@endsection 


@section ('content')

<div class="container">
        <header class="section__title">
            <h2>Submit your property</h2>
            <!-- <small>Post your property to the web, potential tenants could find your property easier.</small> -->
        </header>

        <div class="submit-property">
                    <ul class="submit-property__steps">
                        <li class="active"><a href="#submit-property-1"  data-toggle="tab">1</a></li>
                        <li><a href="#submit-property-2" data-toggle="tab">2</a></li>
                        <li><a href="#submit-property-3" data-toggle="tab">3</a></li>
                        <li><a href="#submit-property-4" data-toggle="tab">4</a></li>
                        <li><a href="#submit-property-5" data-toggle="tab">5</a></li>

                        <li class="submit-property__caret"></li>
                    </ul>

            <div class="tab-content submit-property__content">
                <div class="tab-pane fade in active" id="submit-property-1">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Location</h2>
                        </div>
                        <form class="card__body">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <i class="form-group__bar"></i>
                                        <label>Address</label>
                                    </div>

                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Unit/Floor/Block</label>
                                    </div>

                                    <a href="#submit-property-2" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-2">
                    <div class="card">
                        <div class="card__header">
                            <h2>Contact Information</h2>
                            {{-- <small>Curabitur blandit tempus porttitor ligula malesuada</small> --}}
                        </div>

                        <form class="card__body">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Full Name</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Email Address</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Contact Number</label>
                            </div>

                            <div class="form-group">
                                <label>Owner Information</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="advanced-search-beds" checked>Agent
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="advanced-search-beds">Owner
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="advanced-search-beds">Other
                                    </label>
                                </div>
                            </div>
                            
                            <a href="#submit-property-3" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-3">
                    <div class="card">
                        <div class="card__header">
                            <h2>Rental Price</h2>
                            {{-- <small>Nullam iddolor dnibh ultricies vehicula utielit</small> --}}
                        </div>

                        <form class="card__body">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Askin Price</label>
                            </div>

                            <div class="form-group">
                                <label>Available from</label>
                                <input id="date" class="form-control text-center" type="date">
                                <i class="form-group__bar"></i>
                            </div>

                            <a href="#submit-property-4" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-4">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Information</h2>
                            {{-- <small>Sed posuere consectetur estat lobortis ultricies</small> --}}
                        </div>

                        <form class="card__body" method="post" action="/email">
                            {{ csrf_field() }}


                                    </br>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Property title</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <textarea class="form-control text-center textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Description</label>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Square Feet</label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Bedrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Bathrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds"  checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. of Floors</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds"  checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Parking Space</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>None
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3+
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Parking Price</label>
                                <div class="row">

                                    <div class="col-sm-5">
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="checkbox" name="inner-search-beds">Included
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <small>OR</small>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group form-group--float form-group--float-center">
                                            <input type="text" class="form-control text-center">
                                            <i class="form-group__bar"></i>
                                            <label>Monthly Payment</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pets</label>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="checkbox" name="inner-search-beds">Allowed
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-group--float form-group--float-center">
                                            <input type="text" class="form-control text-center">
                                            <i class="form-group__bar"></i>
                                            <label>Price</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                <small class="errors">Please, verify that you are a human!</small>
                            @endif
                            <div class="row">
                                <div class="col-md-12"></div>
                                    <div class="form-group col-md-12">
                                        <!-- <label for="ReCaptcha">Recaptcha:</label> -->
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>
                            </div>
                            <!-- <input data-provide="datepicker"> -->
                            <a href="#submit-property-5" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-5">
                    <div class="card">
                        <div class="submit-property__success">
                            <i class="zmdi zmdi-check"></i>

                            <h2>Successful!</h2>
                            <p>Thank you for listing your unit with us, we appreciate you business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- <script>
(function(){
    console.log('estamoready');
    $('.datepicker').datepicker();
});
</script> -->
@section('script')
<!-- Slick Carousel - Custom Alerts -->
<script src="/vendors/bower_components/slick-carousel/slick/slick.min.js"></script>
    
<!-- Jquery Light Gallery -->    
<script src="/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>

<!-- rateYo - Ratings -->
<script src="/vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

<!-- jsSocials - Social link sharing -->
<script src="/vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

@endsection