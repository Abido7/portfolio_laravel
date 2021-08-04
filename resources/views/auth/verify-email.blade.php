@extends('web.layout')

@section('title')
    Verifiy Email
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
                        <h4 class="text-light">{{ __('web.verif') }}</h4>
                        <form action="{{ url('email/verification-notification') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-secondary"> Resend Email</button>
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
