@extends ('layout') @section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
</header>

@endsection 

@section ('content')
<section class="section">
        <div class="container">
            <header class="section__title">
                <h2>Forms</h2>
            </header>

            <div class="row">

                <div class="col-md-8">


                    <div class="col-sm-6">
                        <a target="_blank" href="/downloads/tas_rental_application_2017.pdf" class="neighb-guide__item">
                            <img src="/img/tas_rental_application.jpg" alt="">
                            <div class="neighb-guide__label"><span>TAS Rental Application</span></div>
                        </a>
                    </div>
                    
                    <div class="col-sm-6">
                        <a target="_blank" href="/downloads/tas_co-signer_form.pdf" class="neighb-guide__item">
                            <img src="/img/tas_co_signer_form.jpg" alt="">
                            <div class="neighb-guide__label">TAS Co-signer form</div>
                        </a>
                    </div>

                    <!-- <div class="col-sm-6">
                        <a target="_blank" href="/downloads/non_exclusive_listing_agreement_tas.pdf" class="neighb-guide__item">
                            <img src="/img/non_exclusive_listing_agreement_tas.jpg" alt="">
                            <div class="neighb-guide__label">Non-exclusive Listing Agreement TAS</div>
                        </a>
                    </div> -->

                    <div class="col-sm-6">
                        <a target="_blank" href="/downloads/credit_card_authorization.pdf" class="neighb-guide__item">
                            <img src="/img/credit_card_authorization.jpg" alt="">
                            <div class="neighb-guide__label"><span>Credit Card Authorization</span></div>
                        </a>
                    </div>


                    </div>
                <div class="col-md-4 rmd-sidebar-mobile" id="write-to-us">
                    <form class="card contact-email" method="post" action="/email">

                        {{ csrf_field() }}
                        <div class="card__header">
                            <h2>Write to us</h2>
                            <!-- <small>Aeneanquam ellentesque ornare lacinia</small> -->
                        </div>

                        

                        <div class="card__body m-t-10">
                            <div class="form-group form-group--float">
                                <input type="text" name="name" class="field-required form-control">
                                <i class="form-group__bar"></i>
                                <label>Name<small class="required"> *</small></label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="email" class="field-required form-control">
                                <i class="form-group__bar"></i>
                                <label>Email Address<small class="required"> *</small></label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="phone" class="field-required form-control">
                                <i class="form-group__bar"></i>
                                <label>Contact Number<small class="required"> *</small></label>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea name="text" class="field-required form-control textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Message<small class="required"> *</small></label>
                            </div>

                            <small class="errors"></small>
                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                            <!-- <div class="row">
                                <div class="col-md-12"></div>
                                    <div class="form-group col-md-12">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>
                            </div> -->

                            <small class="text-muted">By sending us your information, you agree to Apartment Source Terms of Use & Privacy Policy.</small>

                        </div>
                        
                        <div class="card__footer">
                            <button class="btn btn-primary email-form">Submit</button>
                            <button class="btn btn-link visible-sm-inline visible-xs-inline" data-rmd-action="block-close" data-rmd-target="#write-to-us">Cancel</button>

                            <div class="email-success"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Write Button for mobile -->
    <button class="btn btn--action btn--circle visible-sm visible-xs" data-rmd-action="block-open" data-rmd-target="#write-to-us">
        <i class="zmdi zmdi-edit"></i>
    </button>

@endsection