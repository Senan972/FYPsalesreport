@php
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp


<div class="col-md-2">
    <br>
    <img class="card-img-top" style="border-radius: 50%"
        src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/no_image.jpg') }}"
        height="100%" width="100%"><br><br>

    <ul class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'ہوم پیج' }}
            @else
                {{ 'Home' }}
            @endif
        </a>
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'پروفائل اپ ڈیٹ' }}
            @else
                {{ 'Profile Update' }}
            @endif
        </a>
        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'پاس ورڈ تبدیل کریں' }}
            @else
                {{ 'Change Password' }}
            @endif
        </a>

        <a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'میرے آرڈرز' }}
            @else
                {{ 'My Orders' }}
            @endif
        </a>
        <a href="{{ route('return.order.list') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'آرڈرز واپس کریں' }}
            @else
                {{ 'Return Orders' }}
            @endif
        </a>

        <a href="{{ route('cancel.orders') }}" class="btn btn-primary btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'آرڈرز منسوخ کریں' }}
            @else
                {{ 'Cancel Orders' }}
            @endif
        </a>
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">
            @if (session()->get('language') == 'urdu')
                {{ 'لاگ آوٹ' }}
            @else
                {{ 'Logout' }}
            @endif
        </a>

    </ul>

</div> <!-- // end col md 2 -->
