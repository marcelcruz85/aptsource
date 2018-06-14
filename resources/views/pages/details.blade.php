@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
</header>

@endsection 

@section ('content')
        <div class="container">
        <button onclick="goBack()" class="btn btn-primary">Back to Listings</button>
            <header class="section__title section__title-alt">
                <h2>{{ $listing['Title']  ?? "" }}</h2>
                <small class="address">{{ $listing['StreetNumber']  ?? "" }} {{ $listing['StreetName']  ?? "" }} {{ $listing['City']  ?? "" }}, {{ $listing['State']  ?? "" }} {{ $listing['Zip']  ?? "" }}</small>

                <div class="actions actions--section">
                    <!-- <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div> -->


                    
                    <a href="" data-rmd-action="print"><i class="zmdi zmdi-print"></i></a>
                    <div class="dropdown actions__email">
                        <a href="mailto:?subject=Property Details&body=http://www.apartmentsourcechicago.com/rental/details/{{ $listing['ID'] }}"><i class="zmdi zmdi-email"></i></a>

                        
                    </div>
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-share"></i></a>

                        <div class="dropdown-menu pull-right rmd-share">
                            <div></div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="detail-media">
                            <div class="tab-content">
                                <div class="tab-pane fade in active light-gallery" id="detail-media-images">
                                    @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                        @if(is_array($listing['Photos']['Photo']))
                                            @foreach($listing['Photos']['Photo'] as $photo)                                        
                                            <a href="{{ $photo }}">
                                                <img src="{{ $photo }}" alt="">                                        
                                            </a>
                                            @endforeach 
                                        @else                                                                   
                                            <a href="{{ $listing['Photos']['Photo'] }}">
                                                <img src="{{ $listing['Photos']['Photo'] }}" alt="">                                        
                                            </a>
                                        @endif
                                    @else                                        
                                        <img src="https://placeholdit.imgix.net/~text?&w=960&h=600" alt="">
                                    @endif
                                    
                                </div>
                                <div class="tab-pane fade light-gallery" id="detail-media-floorplan">
                                    <a href="img/demo/floor-plan.png">
                                        <img src="https://placeholdit.imgix.net/~text?&w=1000&h=464" alt="">
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="detail-media-map">
                                    <div id="listing-map"></div>
                                </div>
                            </div>

                            <ul class="detail-media__nav hidden-print">
                                <li class="active"><a href="#detail-media-images" data-toggle="tab"><i class="zmdi zmdi-collection-image"></i></a></li>
                                <!-- <li><a href="#detail-media-floorplan" data-toggle="tab"><i class="zmdi zmdi-view-dashboard"></i></a></li> -->
                                <li><a href="#detail-media-map" data-toggle="tab"><i class="zmdi zmdi-map"></i></a></li>
                            </ul>
                        </div>

                        <div class="detail-info">
                            <div class="detail-info__header clearfix">
                                <strong class="price-details">{{ $listing['Price']  ?? "" }}</strong>

                                <small>{{ $listing['Status']}}</small> 

                                <span>YGL ID: {{ $listing['ID'] }}</span>
                            </div>

                            <ul class="detail-info__list clearfix">
                                <li>
                                    <span>Available Date</span>                                        
                                    <span class="availableDate">{{ $listing['AvailableDate']  ?? "" }}</span>
                                </li>
                                <li>
                                    <span>Pets</span>
                                    <span>{{ $listing['Pet']  ?? "" }}</span>
                                </li>
                                <li>
                                    <span>Bedrooms</span>
                                    <span class='listing-attr'>{{ $listing['Beds']  ?? "" }}</span>
                                </li>
                                <li>
                                    <span>Bathrooms</span>
                                    <span class='listing-attr'>{{ $listing['Baths']  ?? "" }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @if (array_key_exists('Features', $listing))
                        <div class="card detail-amenities">
                            <div class="card__header">
                                <h2>Amenities</h2>
                                <!-- <small>Maecenas seddiam eget risus varius blandit sitamet nonmagna</small> -->
                            </div>

                            <div class="card__body">
                                <ul class="detail-amenities__list">
                                    @foreach($listing['Features']['Feature'] as $feature)                                          
                                        <li class="mdc-bg-light-blue-500">{{$feature}}</li>
                                    @endforeach      
                                </ul>
                            </div>
                        </div>                                                    
                    @endif

                    <div class="card">
                        <div class="card__header">
                            <h2>Property Overview</h2>
                        </div>
                        <div class="card__body">
                            {{ $listing['UnitDescription'] ?? "" }}
                        </div>
                    </div>
                </div>

                <div id="inquire" class="col-md-4">

                    <form class="card hidden-print contact-email" method="post" action="/email">
                        {{ csrf_field() }} 
                        <div class="card__header">
                            <h2>Property Inquiry</h2>
                            <small>Call us now or send us your information</small>
                        </div>

                        <div class="card__body">
                            <div class="inquire__number">
                                <i class="zmdi zmdi-phone"></i>
                                773-404-9900
                            </div>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control" name="name">
                                <label>Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="email"  class="form-control">
                                <label>Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="phone" class="form-control">
                                <label>Contact Number</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea name="text" class="form-control textarea-autoheight"></textarea>
                                <label>Message</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="errors"></small>
                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>

                            <small class="text-muted">By sending us your information, you agree to Apartment Source Terms of Use & Privacy Policy.</small>
                        </div>

                        <div class="card__footer">
                            <button type="submit" class="email-form btn btn-primary">SUBMIT</button>
                            <!-- <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button> -->
                            <div class="email-success"></div>
                        </div>
                    </form>

                    
                    @if (count($nearby) < 6 && $nearby != "") 
                    <div class="card hidden-xs hidden-sm hidden-print">
                        <div class="card__header">
                            <h2>You may also like...</h2>
                            {{-- <small>Morbi risus porta consectetur vestibulum ateros</small> --}}
                        </div>

                        <div class="list-group">
                            @foreach ($nearby as $listing)
                            <a href="/rental/details/{{ $listing['ID'] }}" class="list-group-item media">
                                <div class="pull-left">
                                    @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                        <img src="{{ $listing['Photos']['Photo']['0']}}"  alt="" class="list-group__img" width="65"> 
                                    @else
                                        <img src="/img/nophoto.png"  alt="" class="list-group__img" width="65"> 
                                    @endif  
</div>
                                <div class="media-body list-group__text">
                                    <strong>{{ $listing['StreetNumber']  ?? "" }} {{ $listing['StreetName']  ?? "" }} {{ $listing['City']  ?? "" }}</strong>
                                    <div class="listings-grid__item">
                                        
                                        <ul class="listings-grid__attrs">       
                                            <li class="number"><i class="zmdi zmdi-money"></i>{{ $listing['Price']  ?? "" }}</li>                         
                                            <li class="number"><i class="listings-grid__icon listings-grid__icon--bed"></i> {{ $listing['Beds']  ?? "" }}</li>
                                            <li class="number"><i class="listings-grid__icon listings-grid__icon--bath"></i> {{ $listing['Baths']  ?? "" }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <div class="p-10"></div>
                        </div>
                    </div>                    
                    @endif
                </div>
            </div>
        </div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
<script>
    function initMap() {

        var addressInput = $('.address').text();
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({
                address: addressInput
            }, function (results, status) {

                if (status == google.maps.GeocoderStatus.OK) {

                    var myResult = results[0].geometry.location;
                    var map = new google.maps.Map(document.getElementById('listing-map'), {
                        zoom: 15,
                        center: myResult
                    });
                    var marker = new google.maps.Marker({
                        position: myResult,
                        map: map
                    });
                }
        });
    }
    
</script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbHsbSThuJHEQpfVqp91y3CRS5KiXxS-4&callback=initMap">
        </script>
    @endsection

    @section('script')
    
    <!-- Jquery Light Gallery -->    
    <script src="/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
    
    <!-- Jquery Autosize -->
    <script src="/vendors/bower_components/autosize/dist/autosize.min.js"></script>

    <!-- rateYo - Ratings -->
    <script src="/vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

    <!-- jsSocials - Social link sharing -->
    <script src="/vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

    @endsection