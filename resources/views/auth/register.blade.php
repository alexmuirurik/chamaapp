@extends('layouts.guest')

@section('content')
    <div class="card z-index-0">
        <div class="card-header text-center pt-4">
            <h5>Register</h5>
            <p class="text-sm mt-3 mb-0">Already have an account? 
                <a href="{{ route('login') }}" class="text-primary font-weight-bolder">Sign in</a>
            </p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register.perform') }}">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="names" class="form-control" placeholder="Full Names" aria-label="Name"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password"
                        aria-label="Password">
                    @error('password')
                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-primary font-weight-bolder">Terms and
                            Conditions</a>
                    </label>
                    @error('terms')
                        <p class='text-danger text-xs'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Sign up</button>
                </div>
            </form>
        </div>
    </div>
@endsection
