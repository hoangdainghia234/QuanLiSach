@extends('auth.layouts.login')
@section('title','Forgotten')
@section('content')
    <div class="login-form">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="register-link m-t-15 pull-right">
                @if(Route::has('login'))
                    <p>Already have account ? <a href="{{route('login')}}"> Sign in</a></p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-flat m-b-15">Send Password Reset Link</button>
            <div class="register-link m-t-15 text-center">
                @if (Route::has('register'))
                    <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
                @endif
            </div>
        </form>
    </div>
@endsection
