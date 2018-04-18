@extends ('layout')

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
                            <h2>Donec id elit non mi porta gravida at eget metus?</h2>
                        </div>
                        <div class="card__body">
                            Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec pharetra Ligula Parturient elit?</h2>
                        </div>
                        <div class="card__body">
                            Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>Maecenas sed diam eget risus varius blandit sit amet non magna?</h2>
                        </div>
                        <div class="card__body">
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.
                        </div>
                    </div>

                    <div class="card faq__item">
                        <div class="card__header">
                            <h2>Risus Fermentum Cras Tristique?</h2>
                        </div>
                        <div class="card__body">
                            Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
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