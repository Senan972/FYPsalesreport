@extends('frontend.main_master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">
                            @if (session()->get('language') == 'urdu')
                                {{ 'لاگ ان' }}
                            @else
                                {{ 'Sign in' }}
                            @endif
                        </h4>
                        <br>
                        <p class="">
                            @if (session()->get('language') == 'urdu')
                                {{ 'ہیلو، اپنے اکاونٹ میں خوش آمدید' }}
                            @else
                                {{ 'Hello, Welcome to your account.' }}
                            @endif
                        </p>
                        <br>
                        {{-- <div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div> --}}

                        <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'ای میل' }}
                                    @else
                                        {{ 'Email Address' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'پاسورڈ' }}
                                    @else
                                        {{ 'Password' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="password" id="password" name="password"
                                    class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                            </div>
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'مجھے یاد رکھنا' }}
                                    @else
                                        {{ 'Remember Me' }}
                                    @endif
                                </label>
                                <a href="{{ route('password.request') }}" class="forgot-password pull-right">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'اپنا پاسورڈ بھول گئے؟' }}
                                    @else
                                        {{ 'Forgot your password?' }}
                                    @endif
                                </a>
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">
                                @if (session()->get('language') == 'urdu')
                                    {{ 'لاگ ان' }}
                                @else
                                    {{ 'Login' }}
                                @endif
                            </button>
                        </form>
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">
                            @if (session()->get('language') == 'urdu')
                                {{ 'نیا اکاؤنٹ' }}
                            @else
                                {{ 'Create a new account' }}
                            @endif
                        </h4>
                        <p class="text title-tag-line">
                            @if (session()->get('language') == 'urdu')
                                {{ 'اپنا نیا اکاؤنٹ بنائیں' }}
                            @else
                                {{ 'Create your new account' }}
                            @endif
                        </p>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'نام' }}
                                    @else
                                        {{ 'Name' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="text" id="name" name="name"
                                    class="form-control unicase-form-control text-input">
                            </div>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'ای میل' }}
                                    @else
                                        {{ 'Email Address' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">
                                    @if (session()->get('language') == 'urdu')
                                        {{ 'فون نمبر' }}
                                    @else
                                        {{ 'Phone Number' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="text" id="phone" name="phone"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">

                                    @if (session()->get('language') == 'urdu')
                                        {{ 'پاسورڈ' }}
                                    @else
                                        {{ 'Password' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="password" id="password" name="password"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">
                                    @if (session()->get('language') == 'urdu')
                                        {{ ' پاسورڈ کنفرم کریں' }}
                                    @else
                                        {{ 'Confirm Password' }}
                                    @endif
                                    <span>*</span>
                                </label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">

                                @if (session()->get('language') == 'urdu')
                                    {{ 'بنائیں' }}
                                @else
                                    {{ 'Sign Up' }}
                                @endif

                            </button>
                        </form>


                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

            @include('frontend.body.brands')

            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
