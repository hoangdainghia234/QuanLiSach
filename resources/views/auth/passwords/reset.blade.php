@extends('auth.layouts.login')
@section('title','Reset Password')
@section('content')
    <div class="login-form">
        <div class="boder">
            <h3>Reset Password</h3>
        </div>
        <form method="POST" action="{{route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label>Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="register-link m-t-15 pull-right">
                @if(Route::has('login'))
                    <p>Already have account ? <a href="{{route('login')}}"> Sign in</a></p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset Password</button>
            <div class="register-link m-t-15 text-center">
                @if (Route::has('register'))
                    <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
                @endif
            </div>
        </form>
    </div>
@endsection

