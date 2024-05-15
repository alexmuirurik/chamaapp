@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-start">
                        <h4 class="font-weight-bolder">Change password</h4>
                        <p class="mb-0">Set a new password for your email</p>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('change.perform') }}">
                            @csrf

                            <div class="flex flex-col mb-3">
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="Email" value="{{ old('email') }}" aria-label="Email">
                                @error('email')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-3">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Password" aria-label="Password">
                                @error('password')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-3">
                                <input type="password" name="confirm-password" class="form-control form-control-lg"
                                    placeholder="Password" aria-label="Password">
                                @error('confirm-password')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Send Reset
                                    Link</button>
                            </div>
                        </form>
                    </div>
                    <div id="alert">
                        @include('components.alert')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
