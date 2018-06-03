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

                                <div class="form-group">
                                <label>Features</label>
                                <select multiple id="e1" style="width:400px">
                                    <optgroup label="Apartment Features">
                                        <option value="A/C">A/C</option>
                                        <option value="Central Air">Central Air</option>
                                        <option value="Exposed Brick">Exposed Brick</option>
                                        <option value="Hardwood Floors">Hardwood Floors</option>
                                        <option value="Roof Deck">Roof Deck</option>
                                        <option value="Alcove">Alcove</option>
                                        <option value="Deck">Deck</option>
                                        <option value="Fireplace">Fireplace</option>
                                        <option value="Hight Ceiling">Hight Ceiling</option>
                                        <option value="Storage">Storage</option>
                                        <option value="Balcony">Balcony</option>
                                        <option value="Dinig Room">Dinig Room</option>
                                        <option value="Fireplace (Decorative)">Fireplace (Decorative)</option>
                                        <option value="Loft">Loft</option>
                                        <option value="Walk-in Closet">Walk-in Closet</option>
                                        <option value="Carpet">Carpet</option>
                                        <option value="Duplex">Duplex</option>
                                        <option value="Furnished">Furnished</option>
                                        <option value="Porch">Porch</option>
                                        <option value="Laundry in Unit">Laundry in Unit</option>
                                    </optgroup>
                                    <optgroup label="Kitchen Features">
                                        <option value="Dishwasher">Dishwasher</option>
                                        <option value="Microwave">Microwave</option>
                                        <option value="Pantry">Pantry</option>
                                        <option value="Disposal">Disposal</option>
                                        <option value="Modern Kitchen">Modern Kitchen</option>
                                        <option value="Separate Kitchen">Separate Kitchen</option>
                                        <option value="Eat-in Kitchen">Eat-in Kitchen</option>
                                        <option value="New Appliances">New Appliances</option>
                                        <option value="Stainless Steal Appliances">Stainless Steal Appliances</option>
                                        <option value="Granite Counter Top">Granite Counter Top</option>
                                        <option value="New/Renovated Kitchen">New/Renovated Kitchen</option>
                                    </optgroup>
                                    <optgroup label="Bathroom Features">
                                        <option value="Ceramic Tiles">Ceramic Tiles</option>
                                        <option value="Marble Bath">Marble Bath</option>
                                        <option value="Modern Bath">Modern Bath</option>
                                        <option value="New/Renovated Bath">New/Renovated Bath</option>
                                    </optgroup>
                                    <optgroup label="Additional Features">
                                        <option value="Concierge">Concierge</option>
                                        <option value="Laundry in Building">Laundry in Building</option>
                                        <option value="Tennis Court">Tennis Court</option>
                                        <option value="Elevator">Elevator</option>
                                        <option value="On-Ste Super">On-Ste Super</option>
                                        <option value="Yard">Yard</option>
                                        <option value="Fitness center">Fitness center</option>
                                        <option value="Security System">Security System</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Swimming Pool">Swimming Pool</option>
                                    </optgroup>
                                    <optgroup label="Custom Features">
                                        <option value="Air Conditioning">Air Conditioning</option>
                                        <option value="Alarm">Alarm</option>
                                        <option value="Avail Furnished">Avail Furnished</option>
                                        <option value="Bike Room/Bike Trails">Bike Room/Bike Trails</option>
                                        <option value="Cable or Satelite included">Cable or Satelite included</option>
                                        <option value="Cable TV Included">Cable TV Included</option>
                                        <option value="Cafe">Cafe</option>
                                        <option value="Cats Okay"></option><option value="Cats Okay">Cats Okay</option>
                                        <option value="Ceiling Fans">Ceiling Fans</option>
                                        <option value="Central Air Conditioning">Central Air Conditioning</option>
                                        <option value="Central Heat">Central Heat</option>
                                        <option value="City View">City View</option>
                                        <option value="Dishwasher Portable">Dishwasher Portable</option>
                                        <option value="Dogs Negotiable">Dogs Negotiable</option>
                                        <option value="Dogs Okay">Dogs Okay</option>
                                        <option value="Doorman">Doorman</option>
                                        <option value="Enclosed Porch">Enclosed Porch</option>
                                        <option value="Exercise Room">Exercise Room</option>
                                        <option value="Family Room">Family Room</option>
                                        <option value="First Month Rent Required">First Month Rent Required</option>
                                        <option value="First Month">First Month</option>
                                        <option value="Free Laundry">Free Laundry</option>
                                        <option value="Garage">Garage</option>
                                        <option value="Gated Community">Gated Community</option>
                                        <option value="Gym/Athletic Facilities">Gym/Athletic Facilities</option>
                                        <option value="Health Club">Health Club</option>
                                        <option value="High-Speed Internet">High-Speed Internet</option>
                                        <option value="Humidifier">Humidifier</option>
                                        <option value="Intercom">Intercom</option>
                                        <option value="Internet Included">Internet Included</option>
                                        <option value="Jacuzzi Tub">Jacuzzi Tub</option>
                                        <option value="Maple Cabinet">Maple Cabinet</option>
                                        <option value="No Smoking">No Smoking</option>
                                        <option value="On Site Laundry">On Site Laundry</option>
                                        <option value="On site Manager/Engineer">On site Manager/Engineer</option>
                                        <option value="Oven/Range">Oven/Range</option>
                                        <option value="Panthouse">Panthouse</option>
                                        <option value="Parking Available">Parking Available</option>
                                        <option value="Party Room">Party Room</option>
                                        <option value="Patio Deck">Patio Deck</option>
                                        <option value="Pets Negotiable">Pets Negotiable</option>
                                        <option value="Pool">Pool</option>
                                        <option value="Receiving Room">Receiving Room</option>
                                        <option value="Renovated">Renovated</option>
                                        <option value="Security Deposit Required">Security Deposit Required</option>
                                        <option value="Security Door Locks">Security Door Locks</option>
                                        <option value="Short Term Ok">Short Term Ok</option>
                                        <option value="Skylights">Skylights</option>
                                        <option value="Stainless Steel Appliances">Stainless Steel Appliances</option>
                                        <option value="Steam Shower">Steam Shower</option>
                                        <option value="Storage Unit">Storage Unit</option>
                                        <option value="Stove">Stove</option>
                                        <option value="Suana">Suana</option>
                                        <option value="Sun Deck">Sun Deck</option>
                                        <option value="Sundeck">Sundeck</option>
                                        <option value="Surround Sound Wired">Surround Sound Wired</option>
                                        <option value="Track Lighting">Track Lighting</option>
                                        <option value="Triplex">Triplex</option>
                                        <option value="Updated Kitchen">Updated Kitchen</option>
                                        <option value="Water Front">Water Front</option>
                                        <option value="Whirlpool">Whirlpool</option>
                                        <option value="Wine Cooler/Refrigerator">Wine Cooler/Refrigerator</option>
                                        <option value="Work Out /facility">Work Out /facility</option>
                                    </optgroup>
                                </select>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <textarea class="form-control text-center textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>How to Show the property</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="acept"> Acept Term and Condition
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