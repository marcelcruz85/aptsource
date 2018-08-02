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
<form id="online-application-form" class="contact-email" method="post" action="">
    <div id="tabs">
        <ul class="col-md-2">
            <li>
                <a href="#a">
                    <i class="fas fa-building"></i> Apartment Application</a>
            </li>
            <li>
                <a href="#b">
                    <i class="fas fa-edit"></i> CoSigner Application</a>
            </li>
            <li>
                <a href="#c">
                    <i class="fas fa-file-alt"></i> Additional Documents</a>
            </li>
            <li>
                <a href="#d">
                    <i class="fas fa-credit-card"></i> Payment</a>
            </li>
        </ul>
        <div id="a" class="col-md-10">
            <div class="card">
                {{ csrf_field() }}
                <div class="card__header" class="col-md-8">
                    <h2 class="col-md-8">Personal Information</h2>
                    <!-- <button id="save-application"  class="col-md-3">Save the Application</button> -->
                    <!-- <small>Call us now or send us your information</small> -->
                </div>
                <div class="card__body">
                    <div class="form-group col-md-4">
                        <label>Name
                            <small class="required"> *</small>
                        </label>
                        <input type="text" required="true" class="field-required form-control" name="full_name">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Phone Number
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="phone_number" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="op_email_address" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Date of Birth
                            <small class="required"> *</small>
                        </label>
                        <input id="date" name="date_of_birth" class="form-control datepicker field-required">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>SSN
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ssn" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Number to Occupy Apartment
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="number_to_occupy" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Name of Your Leasing Agent
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="leasing_agent" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Pets
                            <small class="required"> *</small>
                        </label>
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
                        <label>Pet Info
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="pet_info" class="field-required form-control">
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
                        <label>Address Applied For
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="oa_address_applied">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Unit #
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_unit_no_applied" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Bedrooms
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_bedrooms_no_applied" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Property Owner or Management Co.
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_property_manager_applied" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Rent Amount
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_rent_amount_applied" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Lease Start Date
                            <small class="required"> *</small>
                        </label>
                        <input id="date" name="oa_leasing_start_applied" class="form-control datepicker field-required">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Lease Start Date
                            <small class="required"> *</small>
                        </label>
                        <input id="date" name="oa_leasing_end_applied" class="form-control datepicker field-required">
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
                        <label>Current Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="oa_address_current">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>City
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_city_current" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>State
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_state_current" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>Zip
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_zip_current" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>How Long
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_how_long_current" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Current Monthly Rent
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_rent_amount_current" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Current Landlord
                            <small class="required"> *</small>
                        </label>
                        <input name="oa_landlord_current" class="form-control field-required">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Current Landlord Phone
                            <small class="required"> *</small>
                        </label>
                        <input name="oa_landlord_phone_current" class="form-control field-required">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Previous Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="oa_address_previous">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>City
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_city_previous" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>State
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_state_previous" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>Zip
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_zip_previous" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>How Long
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_how_long_previous" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Previous Monthly Rent
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_rent_amount_previous" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Previous Landlord
                            <small class="required"> *</small>
                        </label>
                        <input name="oa_landlord_previous" class="form-control field-required">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Previous Landlord Phone
                            <small class="required"> *</small>
                        </label>
                        <input name="oa_landlord_phone_previous" class="form-control field-required">
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
                        <label>Employer
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="oa_name_employer">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Position
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_position_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Gross Monthly Income
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_gross_income_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="oa_address_employer">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>City
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_city_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>State
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_state_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>Zip
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_zip_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>How Long
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_how_long_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_supervisor_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor's Email
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="oa_supervisors_email_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor's Phone
                            <small class="required"> *</small>
                        </label>
                        <input name="oa_supervisors_phone_employer" class="form-control field-required">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Driver License/Passport
                            <small class="required"> *</small>
                        </label>
                        <input type="file" name="submit_property_pictures[1]" class="upload-pictures-1">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Proof of Income
                            <small class="required"> *</small>
                        </label>
                        <input type="file" name="submit_property_pictures[1]" class="upload-pictures-1">
                        <i class="form-group__bar"></i>
                        <small>ie paystubs, bank statements, offer letter</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Additional Documents</label>
                        <input type="file" name="submit_property_pictures[1]" class="upload-pictures-1">
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
                        <label>Name of School you Currently Attend</label>
                        <input type="text" class="form-control" name="oa_name_school">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Status</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="radio" name="oa_status_school" value="full_time">Full Time
                            </label>
                            <label class="btn">
                                <input type="radio" name="oa_status_school" value="part_time">Part Time
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Total Amount of Student Loans</label>
                        <input type="text" name="oa_loan_amount_school" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <div class="card__footer col-md-12"></div>
            </div>
        </div>
        <div id="b" class="col-md-10">
            <div class="card">
                <div class="card__header" class="col-md-8">
                    <h2 class="col-md-8">CoSigner Application</h2>
                    <!-- <button id="save-application"  class="col-md-3">Save the Application</button> -->
                    <!-- <small>Call us now or send us your information</small> -->
                </div>
                <div class="card__body">
                    <div class="form-group col-md-6">
                        <label>Full Name
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_full_name" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Relationship To Applicant
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_relationship" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="ca_address">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>City
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_city" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>State
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_state" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-1">
                        <label>Zip
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_zip" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Co-Signer Phone
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_phone_number" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Own or Rent?
                            <small class="required"> *</small>
                        </label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="ca_rent" value="pets_no" checked>Rent
                            </label>
                            <label class="btn">
                                <input type="radio" name="ca_own" value="pets_yes">Own
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Co-Signer Email
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_email_address" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Date of Birth
                            <small class="required"> *</small>
                        </label>
                        <input id="date" name="ca_date_of_birth" class="form-control datepicker field-required">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-6">
                        <label>SSN
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_ssn" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                </div>
                <div class="card__footer col-md-12"></div>
            </div>
            <div class="card">
                <div class="card__header" class="col-md-8">
                    <h2 class="col-md-8">Co-Signer Employment Info</h2>
                    <!-- <button id="save-application"  class="col-md-3">Save the Application</button> -->
                    <!-- <small>Call us now or send us your information</small> -->
                </div>
                <div class="card__body">
                    <div class="form-group col-md-4">
                        <label>Employer
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_employer_name" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Position
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_position_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Gross Monthly Income
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_gross_income" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>How Long
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_how_long_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Employer Address
                            <small class="required"> *</small>
                        </label>
                        <input type="text" class="field-required form-control" name="ca_address_employer">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-3">
                        <label>City
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_city_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-2">
                        <label>State
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_state_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Zip
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_zip_employer" class="field-required form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_supervisor_employer" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor Phone
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_supervisor_phone_employer" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Supervisor Email
                            <small class="required"> *</small>
                        </label>
                        <input type="text" name="ca_supervisor_email_employer" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Additional Income
                            <small class="required"> *</small>
                        </label>
                        <textarea name="ca_additional_income_employer" class="form-control"></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="card__footer col-md-12"></div>
            </div>
        </div>
        <div id="c" class="col-md-10">
            <div class="card">
                <div class="card__header" class="col-md-8">
                    <h2 class="col-md-8">Additional Documents</h2>
                    <!-- <button id="save-application"  class="col-md-3">Save the Application</button> -->
                    <!-- <small>Call us now or send us your information</small> -->
                </div>
                <div class="card__body">
                    <div class="form-group col-md-6">
                        <label>Full Name</label>
                        <input type="text" name="ad_full_name" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Full Name</label>
                        <input type="text" name="ad_loan_amount_school" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>File
                            <small class="required"> *</small>
                        </label>
                        <input type="file" name="ad_file_1" class="upload-pictures-1">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>File
                            <small class="required"> *</small>
                        </label>
                        <input type="file" name="ad_file_2" class="upload-pictures-1">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group col-md-4">
                        <label>File</label>
                        <input type="file" name="ad_file_3" class="upload-pictures-1">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="card__footer col-md-12"></div>
            </div>
        </div>
        <div id="d" class="col-md-10">
            <div class="card">
                <div class="card__header" class="col-md-8">
                    <h2 class="col-md-8">Payment</h2>
                    <!-- <button id="save-application"  class="col-md-3">Save the Application</button> -->
                    <!-- <small>Call us now or send us your information</small> -->
                </div>

                <div class="card__body">

                </div>

                <div class="card__footer col-md-12">
                <button type="submit" class="email-form submit-application btn btn-primary">SUBMIT</button>
                <!-- <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button> -->
                <div class="email-success"></div>
</form>

                    <form action="" id="stripe-form" method="POST">
                        {{ csrf_field() }}
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_PUB_KEY') }}" data-amount="6000"
                            data-name="Apartment Source Chicago" data-description="Online Application Fee" data-image="http://dev-aptsource.dotgital.com/img/favicon.png"
                            data-locale="auto" data-zip-code="true" data-label="Pay Securely With Stripe">
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
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