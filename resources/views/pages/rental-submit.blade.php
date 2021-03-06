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
                        <!-- <li><a href="#submit-property-5" data-toggle="tab">5</a></li> -->

                        <li class="submit-property__caret"></li>
                    </ul>

            <div class="tab-content submit-property__content">
                <div class="tab-pane fade in active" id="submit-property-1">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Location</h2>
                        </div>
                        <form class="card__body submit_property_form contact-email" method="post" action="/email" enctype="multipart/form-data">
                            {{ csrf_field() }}

                        <input type="hidden" name="form_name" value="submit">
                        <div class="card__body card_one">
                                    <div class="form-group form-group--float">
                                        <input type="text" name="submit_address" class="form-control field-required" required>
                                        <i class="form-group__bar"></i>
                                        <label>Address<small class="required"> *</small></label>
                                    </div>

                                    <div class="form-group form-group--float">
                                        <input type="text" name="submit_address_unit" class="form-control text-center field-required" required>
                                        <i class="form-group__bar"></i>
                                        <label>Unit/Floor/Block<small class="required"> *</small></label>
                                    </div>
                                    <small class="required required-text">Please fill in all required fields</small>
                                    <a href="#submit-property-2" id="card_one" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
</div>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-2">
                    <div class="card">
                        <div class="card__header">
                            <h2>Contact Information</h2>
                            {{-- <small>Curabitur blandit tempus porttitor ligula malesuada</small> --}}
                        </div>

                        <div class="card__body card_two">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" name="submit_name" class="form-control text-center field-required">
                                <i class="form-group__bar"></i>
                                <label>Full Name<small class="required"> *</small></label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" name="submit_email" class="form-control text-center field-required">
                                <i class="form-group__bar"></i>
                                <label>Email Address<small class="required"> *</small></label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" name="submit_phone" class="form-control text-center field-required">
                                <i class="form-group__bar"></i>
                                <label>Contact Number<small class="required"> *</small></label>
                            </div>

                            <div class="form-group">
                                <label>Owner Information<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn  active">
                                        <input type="radio" name="submit_owner_info" value="Owner" checked>Owner
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_owner_info" value="Agent">Agent
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_owner_info" value="Other">Other
                                    </label>
                                </div>
                            </div>
                            
                            <small class="required required-text">Please fill in all required fields</small>
                            <a href="#submit-property-3" id="card_two" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
</div>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-3">
                    <div class="card">
                        <div class="card__header">
                            <h2>Rental Price</h2>
                            {{-- <small>Nullam iddolor dnibh ultricies vehicula utielit</small> --}}
                        </div>

                        <div class="card__body card_three">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" name="submit_price" class="form-control text-center field-required">
                                <i class="form-group__bar"></i>
                                <label>Asking Price<small class="required"> *</small></label>
                            </div>

                            <div class="form-group">
                                <label>Available from<small class="required"> *</small></label>
                                <input id="date" name="submit_available" class="form-control datepicker text-center field-required">
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="required required-text">Please fill in all required fields</small>
                            <a href="#submit-property-4" data-toggle="tab" id="card_three" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
</div>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-4">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Information</h2>
                            {{-- <small>Sed posuere consectetur estat lobortis ultricies</small> --}}
                        </div>

                        <div class="card__body card_four">


                                    </br>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" name="submit_title" class="form-control text-center field-required" required>
                                <i class="form-group__bar"></i>
                                <label>Property title<small class="required"> *</small></label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <textarea name="submit_description" class="form-control text-center textarea-autoheight field-required"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Description<small class="required"> *</small></label>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" name="submit_size" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Square Feet</label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Bedrooms<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_beds" value="1" checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_beds" value="2">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_beds" value="3">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_beds" value="4">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_beds" value="4+">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Bathrooms<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_bath" value="1" checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_bath" value="2">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_bath" value="3">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_bath" value="4">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_bath" value="4+">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. of Floors<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_floor" value="1"  checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_floor" value="2">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_floor" value="3">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_floor" value="4">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_floor" value="4+">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Parking Space<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_parking" value="none" checked>None
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking" value="1">1
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking" value="2">2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking" value="3">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking" value="3+">3+
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Parking<small class="required"> *</small></label>
                                <div class="row">

                                    <div class="col-sm-5">
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="checkbox" name="submit_parking_include" value="Included">Included
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <small>OR</small>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group form-group--float form-group--float-center">
                                            <input type="text" name="submit_parking_price" class="form-control text-center">
                                            <i class="form-group__bar"></i>
                                            <label>Monthly Payment</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_parking_type" value="Garage" checked>Garage
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking_type" value="Uncovered">Uncovered
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_parking_type" value="Tandem">Tandem
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pets<small class="required"> *</small></label>

                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="checkbox" name="submit_pets_dogs" value="Ok">Dogs
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="submit_pets_cats" value="Ok">Cats
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="submit_pets_no_pets" value="No Pets">No Pets
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="submit_pets_fee" value="Yes">Fee
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="submit_pets_deposit" value="Yes">Deposit
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group form-group--float form-group--float-center">
                                    <input type="text" name="submit_pets_price" class="form-control text-center">
                                    <i class="form-group__bar"></i>
                                    <label>Price</label>
                                </div>
                            </div>

                                <div class="form-group">
                                <input type="hidden" name="submit_features" class="submit_features_values" value="">
                                <label>Features<small class="required"> *</small></label>
                                <div class="features-box form-control text-center submit_features_modal"><ul></ul></div>

                                <!-- <input name="submit_features_modal" class="form-control text-center submit_features_modal" value=""> -->
                                <!-- <select multiple id="e1" style="width:400px" class="submit_features_select field-required">
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
                                </select>  -->
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <textarea name="submit_show" class="form-control text-center textarea-autoheight field-required"></textarea>
                                <i class="form-group__bar"></i>
                                <label>How to Show the property<small class="required"> *</small></label>
                            </div>

                            <div class="form-group">
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="submit_property_status" value="Occupied" checked>Occupied
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="submit_property_status" value="Vacant">Vacant
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-group--float form-group--float-center">
                                <textarea name="submit_tenant_information" class="form-control text-center textarea-autoheight field-required"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Tenant Information<small class="required"> *</small></label>
                            </div>
                            <div class="form-group  dropzone" id="submitproperty">
                                <label>Photos<small class="required"> *</small></label>
                                <div id="image-upload">
                                    <input type="file" name="submit_property_pictures[1]" class="upload-pictures-1">
                                    <input type="file" name="submit_property_pictures[2]" class="upload-pictures-2">
                                    <input type="file" name="submit_property_pictures[3]" class="upload-pictures-3">
                                    <input type="file" name="submit_property_pictures[4]" class="upload-pictures-4 hide">
                                    <input type="file" name="submit_property_pictures[5]" class="upload-pictures-5 hide">
                                    <input type="file" name="submit_property_pictures[6]" class="upload-pictures-6 hide">
                                    <input type="file" name="submit_property_pictures[7]" class="upload-pictures-7 hide">
                                    <input type="file" name="submit_property_pictures[8]" class="upload-pictures-8 hide">
                                    <input type="file" name="submit_property_pictures[9]" class="upload-pictures-9 hide">
                                    <input type="file" name="submit_property_pictures[10]" class="upload-pictures-10 hide">
                                </div>
                                <a href="#" class="add-another-pic"> Add another</a>
                                <!-- testing -->
                            </div>
                            <div class="accept form-group">
                                <div class="form-group">
                                <small class="terms">
                                    Terms: There is no fee if you lease your apartment on your own. We only collect a fee if and when the tenants provided by The Apartment Source are accepted into a lease agreement. The commission fee is equivalent to one month’s rent. To assist you with the approval process, we will provide you with a detailed application including previous landlord verification, employment verification and a detailed credit report. Applicants must be approved or denied within 48 hours of receiving the application.
                                </small>
                                </div>
                                <div class="form-group">
                                    <input name="submit_accept_terms" type="checkbox" class="submit_accept"> By checking this box I accept the terms stated above and is my digital signature <small class="required"> *</small>
                                </div>
                                <div class="form-group">
                                    <input name="submit_accept" type="checkbox" class="submit_accept"> Accept Terms and Conditions <small class="required"> *</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <small class="errors"></small>
                                    <div class="submit_capcha">
                                            <!-- <label for="ReCaptcha">Recaptcha:</label> -->
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                    </div>
                            </div>
                            <div class="form-group">
                            <small class="required required-text">Please fill in all required fields</small>
                            </div>
                            <button id="card_four" type="submit" class="email-form btn btn-primary last">
                                <!-- <i class="zmdi zmdi-check"> Submit</i> -->
                                Submit
                            </button>
                            <!-- <input class=" btn btn--circle btn-primary submit-property__button" name="submit" type="submit" value="Submit"><i class="zmdi zmdi-check"></i></input> -->
                            <!-- <a href="#submit-property-5" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-check"></i>
                            </a> -->
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-modal modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Property Features</h4>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apartment Features</span>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="A/C"/><label>A/C</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Central Air"/><label>Central Air</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Exposed Brick"/><label>Exposed Brick</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Hardwood Floors"/><label>Hardwood Floors</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Roof Deck"/><label>Roof Deck</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Alcove"/><label>Alcove</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Deck"/><label>Deck</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Fireplace"/><label>Fireplace</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Hight Ceiling"/><label>Hight Ceiling</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Storage"/><label>Storage</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Balcony"/><label>Balcony</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Dinig Room"/><label>Dinig Room</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Fireplace (Decorative)"/><label>Fireplace (Decorative)</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Loft"/><label>Loft</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Walk-in Closet"/><label>Walk-in Closet</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Carpet"/><label>Carpet</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Duplex"/><label>Duplex</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Furnished"/><label>Furnished</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Porch"/><label>Porch</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Laundry in Unit"/><label>Laundry in Unit</label></div>
                
                    <span>Kitchen Features</span>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Dishwasher"/><label>Dishwasher</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Microwave"/><label>Microwave</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Pantry"/><label>Pantry</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Disposal"/><label>Disposal</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Modern Kitchen"/><label>Modern Kitchen</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Separate Kitchen"/><label>Separate Kitchen</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Eat-in Kitchen"/><label>Eat-in Kitchen</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="New Appliances"/><label>New Appliances</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Stainless Steal Appliances"/><label>Stainless Steal Appliances</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Granite Counter Top"/><label>Granite Counter Top</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="New/Renovated Kitchen"/><label>New/Renovated Kitchen</label></div>

                    <span>Bathroom Features</span>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Ceramic Tiles"/><label>Ceramic Tiles</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Marble Bath"/><label>Marble Bath</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Modern Bath"/><label>Modern Bath</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="New/Renovated Bath"/><label>New/Renovated Bath</label></div>

                    <span>Additional Features</span>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Concierge"/><label>Concierge</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Laundry in Building"/><label>Laundry in Building</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Tennis Court"/><label>Tennis Court</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Elevator"/><label>Elevator</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="On-Ste Super"/><label>On-Ste Super</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Yard"/><label>Yard</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Fitness center"/><label>Fitness center</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Security System"/><label>Security System</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Internet"/><label>Internet</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Swimming Pool"/><label>Swimming Pool</label></div>

                    <span>Custom Features</span>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Air Conditioning"/><label>Air Conditioning</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Alarm"/><label>Alarm</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Avail Furnished"/><label>Avail Furnished</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Bike Room/Bike Trails"/><label>Bike Room/Bike Trails</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Cable or Satelite included"/><label>Cable or Satelite included</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Cable TV Included"/><label>Cable TV Included</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Cafe"/><label>Cafe</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Cats Okay"/><label>Cats Okay</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Ceiling Fans"/><label>Ceiling Fans</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Central Air Conditioning"/><label>Central Air Conditioning</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Central Heat"/><label>Central Heat</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="City View"/><label>City View</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Dishwasher Portable"/><label>Dishwasher Portable</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Dogs Negotiable"/><label>Dogs Negotiable</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Dogs Okay"/><label>Dogs Okay</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Doorman"/><label>Doorman</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Enclosed Porch"/><label>Enclosed Porch</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Exercise Room"/><label>Exercise Room</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Family Room"/><label>Family Room</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="First Month Rent Required"/><label>First Month Rent Required</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="First Month"/><label>First Month</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Free Laundry"/><label>Free Laundry</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Garage"/><label>Garage</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Gated Community"/><label>Gated Community</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Gym/Athletic Facilities"/><label>Gym/Athletic Facilities</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Health Club"/><label>Health Club</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="High-Speed Internet"/><label>High-Speed Internet</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Humidifier"/><label>Humidifier</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Intercom"/><label>Intercom</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Internet Included"/><label>Internet Included</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Jacuzzi Tub"/><label>Jacuzzi Tub</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Maple Cabinet"/><label>Maple Cabinet</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="No Smoking"/><label>No Smoking</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="On Site Laundry"/><label>On Site Laundry</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="On site Manager/Engineer"/><label>On site Manager/Engineer</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Oven/Range"/><label>Oven/Range</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Panthouse"/><label>Panthouse</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Parking Available"/><label>Parking Available</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Party Room"/><label>Party Room</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Patio Deck"/><label>Patio Deck</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Pets Negotiable"/><label>Pets Negotiable</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Pool"/><label>Pool</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Receiving Room"/><label>Receiving Room</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Renovated"/><label>Renovated</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Security Deposit Required"/><label>Security Deposit Required</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Security Door Locks"/><label>Security Door Locks</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Short Term Ok"/><label>Short Term Ok</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Skylights"/><label>Skylights</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Stainless Steel Appliances"/><label>Stainless Steel Appliances</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Steam Shower"/><label>Steam Shower</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Storage Unit"/><label>Storage Unit</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Stove"/><label>Stove</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Suana"/><label>Suana</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Sun Deck"/><label>Sun Deck</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Sundeck"/><label>Sundeck</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Surround Sound Wired"/><label>Surround Sound Wired</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Track Lighting"/><label>Track Lighting</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Triplex"/><label>Triplex</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Updated Kitchen"/><label>Updated Kitchen</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Water Front"/><label>Water Front</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Whirlpool"/><label>Whirlpool</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Wine Cooler/Refrigerator"/><label>Wine Cooler/Refrigerator</label></div>
                    <div class="form-checkbox"><input type="checkbox" class="feature-checkbox" value="Work Out /facility"/><label>Work Out /facility</label></div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary features-accept" data-dismiss="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>
@endsection

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