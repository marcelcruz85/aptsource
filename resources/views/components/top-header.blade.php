<div class="header__top">
    <div class="container">
        <ul class="top-nav">
             {{-- <li class="dropdown top-nav__guest">
                <a data-toggle="dropdown" href="">Register</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                <form class="dropdown-menu stop-propagate" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                    <div class="form-group form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                        <i class="form-group__bar"></i>
                    </div>
                    
                    <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                        <i class="form-group__bar"></i>
                    </div>

                    <p>
                        <small>By Signing up with Apartment Source, you're agreeing to our
                            <a href="">terms and conditions</a>.</small>
                    </p>

                    <button type="submit" class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                    <div class="text-center">
                        <small>
                            <a href="">Are you an Agent?</a>
                        </small>
                    </div>

                    <div class="top-nav__auth">
                        <span>or</span>

                        <div>Sign in using</div>

                        <a href="" class="mdc-bg-blue-500">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>

                        <a href="" class="mdc-bg-cyan-500">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>

                        <a href="" class="mdc-bg-red-400">
                            <i class="zmdi zmdi-google"></i>
                        </a>
                    </div>

                </form>

                    @endauth
            @endif
            </li>

            <li class="dropdown top-nav__guest">
                <a data-toggle="dropdown" href="" data-rmd-action="switch-login">Login</a>

                <div class="dropdown-menu">
                    <div class="tab-content">
                        <form class="tab-pane active in fade" id="top-nav-login">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                            <div class="text-center">
                                <a href="#top-nav-forgot-password" data-toggle="tab">
                                    <small>Forgot email/password?</small>
                                </a>
                            </div>

                            <div class="top-nav__auth">
                                <span>or</span>

                                <div>Sign in using</div>

                                <a href="" class="mdc-bg-blue-500">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>

                                <a href="" class="mdc-bg-cyan-500">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>

                                <a href="" class="mdc-bg-red-400">
                                    <i class="zmdi zmdi-google"></i>
                                </a>
                            </div>
                        </form>

                        <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                            <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Emaill Address">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-warning btn-block">Reset Password</button>
                        </form>
                    </div>
                </div>
            </li>  --}}


            <li class="pull-right top-nav__icon">
                <a href="https://www.yelp.com/biz/the-apartment-source-chicago-2" target="_blank">
                    <i class="fab fa-yelp fa-lg"></i>
                </a>
            </li>
            <li class="pull-right top-nav__icon">
                <a href="https://www.facebook.com/TheApartmentSource" target="_blank">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
            </li>

            <li class="pull-right hidden-xs">
                <span>
                    <a class="mailto" href="mailto:info@apartmentsourcechicago.com" target="_top">
                        <i class="zmdi zmdi-email"></i>info@apartmentsourcechicago.com</a>
                </span>
            </li>
            <li class="pull-right hidden-xs">
                <span>
                    <i class="zmdi zmdi-phone"></i>773-404-9900</span>
            </li>
        </ul>
    </div>
</div>