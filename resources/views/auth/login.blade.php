@extends('layouts.guest')

@section('content')
    <div class="card card-plain">
        <div class="card-header pb-0 text-center">
            <h4 class="font-weight-bolder my-3">Sign In</h4>
            <p class="mb-3">
                Don't have an account? 
                <a class="text-primary" href="/register">Create an Account</a>
            </p>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ route('login.perform') }}">
                @csrf
                @method('post')
                <div class="flex flex-col mb-4">
                    <input type="email" name="email" class="form-control py-2"
                        value="{{ old('email') ?? 'admin@argon.com' }}" aria-label="Email">
                    @error('email')
                        <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <input type="password" name="password" class="form-control py-2" aria-label="Password"
                        value="secret">
                    @error('password')
                        <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="form-check form-switch mb-4">
                    <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <div class="text-center font-weight-bolder">
                    <a href="{{ route('reset-password') }}" class="text-primary">
                        Forgot password?
                    </a>
                    <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
