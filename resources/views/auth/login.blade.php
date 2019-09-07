@extends('auth.layouts.login')
@section('title','Login')
@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            <div class="boder">
                <h3>Login</h3>
            </div>
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}"> Remember Me
                </label>
                <label class="pull-right">
                    @if (Route::has('password.request'))
                        <a href="{{route('password.request')}}">Forgotten Password?</a>
                    @endif
                </label>
            </div>
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
            <div class="register-link m-t-15 text-center">
                @if (Route::has('register'))
                    <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
                @endif
            </div>
        </form>
    </div>

@endsection
