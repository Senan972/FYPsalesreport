@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
        @include('frontend.common.user_sidebar')
            <div class="col-md-2">
                
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Change Password</span><strong></strong> </h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.password.update') }}">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">
                                    @if (session()->get('language') == 'urdu')
                {{ 'موجودہ خفیہ پاسورڈ' }}
            @else
                {{ 'Current Password' }}
            @endif
             <span></span></label>
                                <input type="password" id="current_password" name="oldpassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1"> 
                                    @if (session()->get('language') == 'urdu')
                {{ 'نیا پاس ورڈ' }}
            @else
                {{ 'New Password' }}
            @endif
            <span></span></label>
                                <input type="password" id="password" name="password" class="form-control"">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1"> 
                                    @if (session()->get('language') == 'urdu')
                {{ 'پاس ورڈ کی تصدیق کریں' }}
            @else
                {{ 'Confirm Password' }}
            @endif
            <span></span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger">
                                    @if (session()->get('language') == 'urdu')
                                            {{ 'اپڈیٹ' }}
                                        @else
                                            {{ 'Update' }}
                                        @endif
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection