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
            <form class="contact-email" method="post" action="/email">

                <div class="card">
                        {{ csrf_field() }} 
                        <div class="card__header">
                            <h2>Personal Information</h2>
                            <!-- <small>Call us now or send us your information</small> -->
                        </div>

                        <div class="card__body">
                            <div class="form-group col-md-4">                                
                                <label>Name<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="name">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Phone Number<small class="required"> *</small></label>
                                <input type="text" name="phone" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email Address<small class="required"> *</small></label>
                                <input type="text" name="email"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label>Date of Birth<small class="required"> *</small></label>
                                <input id="date" name="submit_available" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>SSN<small class="required"> *</small></label>
                                <input type="text" name="ssn"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Number to Occupy Apartment<small class="required"> *</small></label>
                                <input type="text" name="number_to_occupy"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Name of Your Leasing Agent<small class="required"> *</small></label>
                                <input type="text" name="leasing_agent"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                            <label>Pets<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="apply_pets" value="pets_no" checked>No
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="apply_pets" value="pets_yes">Yes
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Pet Info<small class="required"> *</small></label>
                                <input type="text" name="pet_info"  class="field-required form-control">
                                <i class="form-group__bar"></i>

                                <smal>Include type, breed, weight</smal>
                            </div>
                            <div class="card__footer col-md-12"></div>
                        </div>
                    </div>                 

                    <div class="card">
                        <div class="card__header">
                            <h2>Apartment Information</h2>
                            <!-- <small>Call us now or send us your information</small> -->
                        </div>

                        <div class="card__body">
                        <div class="form-group col-md-4">                                
                                <label>Address Applied For<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="address">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Unit #<small class="required"> *</small></label>
                                <input type="text" name="unit_no" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Bedrooms<small class="required"> *</small></label>
                                <input type="text" name="bedrooms_no"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Property Owner or Management Co.<small class="required"> *</small></label>
                                <input type="text" name="property_manager"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Rent Amount<small class="required"> *</small></label>
                                <input type="text" name="rent_amount"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Lease Start Date<small class="required"> *</small></label>
                                <input id="date" name="leasing_start" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Lease Start Date<small class="required"> *</small></label>
                                <input id="date" name="leasing_end" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="card__footer col-md-12"></div>
                    </div>

                     <div class="card">
                        <div class="card__header">
                            <h2>Current & Previous Address</h2>
                            <!-- <small>Call us now or send us your information</small> -->
                        </div>

                        <div class="card__body">
                        <div class="form-group col-md-5">                                
                                <label>Current Address<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="address_curr">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-3">
                                <label>City<small class="required"> *</small></label>
                                <input type="text" name="city_curr" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-2">
                                <label>State<small class="required"> *</small></label>
                                <input type="text" name="state_curr"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>Zip<small class="required"> *</small></label>
                                <input type="text" name="zip_curr"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>How Long<small class="required"> *</small></label>
                                <input type="text" name="how_long_curr"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Current Monthly Rent<small class="required"> *</small></label>
                                <input type="text" name="rent_amount_curr"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Current Landlord<small class="required"> *</small></label>
                                <input id="date" name="landlord_curr" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Current Landlord Phone<small class="required"> *</small></label>
                                <input id="date" name="landlord_phone_curr" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-5">                                
                                <label>Previous Address<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="address_prev">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-3">
                                <label>City<small class="required"> *</small></label>
                                <input type="text" name="city_prev" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-2">
                                <label>State<small class="required"> *</small></label>
                                <input type="text" name="state_prev"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>Zip<small class="required"> *</small></label>
                                <input type="text" name="zip_prev"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>How Long<small class="required"> *</small></label>
                                <input type="text" name="how_long_prev"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Previous Monthly Rent<small class="required"> *</small></label>
                                <input type="text" name="rent_amount_prev"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Previous Landlord<small class="required"> *</small></label>
                                <input id="date" name="landlord_prev" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Previous Landlord Phone<small class="required"> *</small></label>
                                <input id="date" name="landlord_phone_prev" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="card__footer col-md-12"></div>
                    </div>


                    <div class="card">
                        <div class="card__header">
                            <h2>Employment Information</h2>
                            <!-- <small>Call us now or send us your information</small> -->
                        </div>

                        <div class="card__body">
                        <div class="form-group col-md-4">                                
                                <label>Employer<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="employer">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Position<small class="required"> *</small></label>
                                <input type="text" name="position" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Gross Monthly Income<small class="required"> *</small></label>
                                <input type="text" name="gross_income"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-5">                                
                                <label>Address<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="address_job">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-3">
                                <label>City<small class="required"> *</small></label>
                                <input type="text" name="city_job" class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-2">
                                <label>State<small class="required"> *</small></label>
                                <input type="text" name="state_job"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>Zip<small class="required"> *</small></label>
                                <input type="text" name="zip_job"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-1">
                                <label>How Long<small class="required"> *</small></label>
                                <input type="text" name="how_long_job"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Supervisor<small class="required"> *</small></label>
                                <input type="text" name="supervisor"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Supervisor's Email<small class="required"> *</small></label>
                                <input type="text" name="supervisors_email"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Supervisor's Phone<small class="required"> *</small></label>
                                <input id="date" name="supervisors_phone" class="form-control datepicker field-required">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="card__footer col-md-12"></div>
                    </div>

                    <div class="card">
                        <div class="card__header">
                            <h2>Student Information</h2>
                            <!-- <small>Call us now or send us your information</small> -->
                        </div>

                        <div class="card__body">
                            <div class="form-group col-md-4">                                
                                <label>Name of School you Currently Attend<small class="required"> *</small></label>
                                <input type="text" class="field-required form-control" name="school">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group col-md-4">
                            <label>Status<small class="required"> *</small></label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="school_status" value="full_time" checked>Full Time
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="school_status" value="part_time">Part Time
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Total Amount of Student Loans<small class="required"> *</small></label>
                                <input type="text" name="student_loan_amount"  class="field-required form-control">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="card__footer col-md-12"></div>
                    </div>

                    <div class="card">

                        <div class="card__body">
                        <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <small class="errors col-md-12"></small>
                                <div class="g-recaptcha col-md-12" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>

                                <small class="text-muted col-md-12">By sending us your information, you agree to Apartment Source Terms of Use & Privacy Policy.</small>
                                <small class="required required-text col-md-12">Please fill in all required fields</small>
                            </div>
                        </div>
                        
                        <div class="card__footer col-md-12"></div>
                    </div>

                <div class="card__footer col-md-12">
                    <button type="submit" class="email-form btn btn-primary">SUBMIT</button>
                    <!-- <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button> -->
                    <div class="email-success"></div>
                </div>
            </form>
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