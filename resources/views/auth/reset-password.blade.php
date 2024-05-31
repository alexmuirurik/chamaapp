@extends('layouts.guest')

@section('content')
    <div class="card card-plain">
        <div class="card-header mt-4 pb-0 text-center">
            <h4 class="font-weight-bolder">Reset password</h4>
            <p class="mb-3">
                Don't have an account? 
                <a class="text-primary" href="/register">Create an Account</a>
            </p>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ route('reset.perform') }}">
                @csrf
                @method('post')
                <div class="flex flex-col">
                    <input type="email" name="email" class="form-control py-2" placeholder="Email" value="{{ old('email') }}" aria-label="Email">
                    @error('email')
                        <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary w-100 mb-0">Send Reset
                        Link</button>
                </div>
            </form>
        </div>
        <div id="alert">
            @include('components.alert')
        </div>
    </div>
@endsection
