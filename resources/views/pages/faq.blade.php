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
                <h2>Frequently Asked Questions</h2>
                <small>Duis mollis estnon commodo luctus nisierat porttitor ligula eget lacinia odio semnec</small>
            </header>

            <div class="row">
                <div class="col-md-8 faq">
                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>How long does it take to find an apartment?</h2>
                        </div>
                        <div class="card__body">
                                Typically it takes 3-5 hours, but this varies based on each apartment search.  Our commitment is to give you as much time and attention as you require so that we can match you with the perfect apartment.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>Can I lease an apartment for less than a 12 month period?</h2>
                        </div>
                        <div class="card__body">
                                No, unfortunatly our company and the managment companies we work with mostly deal with 1 year leases.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>What should you bring with you when searching for an apartment?</h2>
                        </div>
                        <div class="card__body">
                                We recommend bringing a camera and a note pad, so when looking at number of places it’s helpful to compare notes and pictures.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>What will I need if I want to apply for an apartment?</h2>
                        </div>
                        <div class="card__body">                            
                            <ul>
                                <li>Check book</li>
                                <li>Employment Information</li>
                                <li>Landlord Information</li>
                                <li>Co-signer application-if a student or unemployed</li>
                                <li>Student loan documentation, if student loans will be used to pay rent</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>What form of payment can I use for my first month’s rent?</h2>
                        </div>
                        <div class="card__body">
                                We only accept personal and cashier’s checks. 
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>What if I have no credit history or a challenged credit history?</h2>
                        </div>
                        <div class="card__body">
                                We work with a variety of landlords, each of whom have different approval guidelines.  We will do our best to match you with an apartment that fits your needs. 
                        </div>
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
                                <input type="text" name="name" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Name</label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="email" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Email Address</label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" name="phone" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Contact Number</label>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea name="text" class="form-control textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Message</label>
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

@section ('script')
<script>
    $(function() {        
        $( '.email-form' ).click( function(e) {
            e.preventDefault();

            //validating recaptcha
            var response = grecaptcha.getResponse();

            if(response.length == 0){
                $( ".errors" ).html( "<p>Please, verify that you are a human!</p>" );             
            }else{
                console.log('valida');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '/email',
                    data: $('.contact-email').serialize(),
                    success: function(msg) {
                        $( ".errors" ).html( "<p></p>" );   
                        $( ".email-success" ).html( "<p>Thank You. </br>Your message has been successfully sent.</p>" );
                        $('.contact-email').find("input[type=text], textarea").val("");
                        console.log(msg);
                    }
                });
            }
        });
    });
</script>
@endsection