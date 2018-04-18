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
                            <h2>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor?</h2>
                        </div>
                        <div class="card__body">
                            Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>Integer posuere erat a ante venenatis dapibus posuere velit aliquet?</h2>
                        </div>
                        <div class="card__body">
                            Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.

                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rmd-sidebar-mobile" id="write-to-us">
                    <form class="card">
                        <div class="card__header">
                            <h2>Write to us</h2>
                            <small>Aeneanquam ellentesque ornare lacinia</small>
                        </div>

                        <div class="card__body m-t-10">
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Name</label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Email Address</label>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Contact Number</label>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Message</label>
                            </div>

                            <small class="text-muted">By sending us your information, you agree to Root’s Terms of Use & Privacy Policy.</small>
                        </div>

                        <div class="card__footer">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-link">Reset</button>
                            <button class="btn btn-link visible-sm-inline visible-xs-inline" data-rmd-action="block-close" data-rmd-target="#write-to-us">Cancel</button>
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