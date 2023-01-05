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
                        <h3 class="text-center"><span class="text-danger">
                                @if (session()->get('language') == 'urdu')
                                    {{ 'اپنا پروفائل اپ ڈیٹ کریں۔' }}
                                @else
                                    {{ 'Update Your Profile' }}
                                @endif
                        </h3>
                        <div class="card-body">
                            <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">
                                        @if (session()->get('language') == 'urdu')
                                            {{ 'نام' }}
                                        @else
                                            {{ 'Name' }}
                                        @endif <span></span>
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">
                                        @if (session()->get('language') == 'urdu')
                                            {{ 'ای میل' }}
                                        @else
                                            {{ 'Email' }}
                                        @endif <span></span>
                                    </label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">
                                        @if (session()->get('language') == 'urdu')
                                            {{ 'فون' }}
                                        @else
                                            {{ 'Phone' }}
                                        @endif <span></span>
                                    </label>
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">
                                        @if (session()->get('language') == 'urdu')
                                            {{ 'میری تصویر' }}
                                        @else
                                            {{ 'User Image' }}
                                        @endif <span></span>
                                    </label>
                                    <input type="file" name="profile_photo_path" class="form-control">
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
