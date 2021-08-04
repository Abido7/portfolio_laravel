@extends('web.layout')

@section('title')
    Login
@endsection

@section('content')


    <!-- Contact -->
    <div id="contact" class="section vh-100 bg-base">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- login form -->
                <div class="col-12">
                    <div class=" vh-100 d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-light">{{ __('web.login') }}</h4>
                        <form method="POST" action="{{ url('/login') }}" class="w-75">
                            @csrf
                            <input class="form-control my-2" type="email" name="email"
                                placeholder="{{ __('web.email') }}">
                            @error('email')
                                <p class="lead text-danger p-0">
                                    {{ $message }}
                                </p>
                            @enderror

                            <input class="form-control my-2" type="password" name="password"
                                placeholder="{{ __('web.password') }}">
                            @error('password')
                                <p class="lead text-danger p-0">
                                    {{ $message }}
                                </p>
                            @enderror

                            <div class="form-group">
                                <label for="remember" class="text-light">Remember Me</label>
                                <input type="checkbox" name="remember" id="remember">
                            </div>

                            <button type="submit" class="btn btn-outline-primary mt-2">{{ __('web.signup') }}</button>
                        </form>
                    </div>
                </div>
                <!-- /login form -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact -->
@endsection
