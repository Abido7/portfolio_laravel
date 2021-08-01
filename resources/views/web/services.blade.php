@extends('layout')

@section('title')
    Services
@endsection

@section('content')

    <!-- ================================================== start services section ========================================================= -->

    <section class="services bg-base vh-100" id="services">
        <div class="container">
            <div class="row">

                @foreach ($baseServices as $baseServe)
                    <div class="col-md-3">
                        <div class="services-icons d-flex flex-column align-items-center justify-content-center mt-5">
                            <div class="{{ $baseServe->icon }} text-info"></div>
                            <span class="text-uppercase text-white font-weight-bold">{{ $baseServe->name() }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="services-title mt-5">
                        <h2>{{ $baseServe->service->title() }}</h2>
                        <p>
                            {{ $baseServe->service->desc() }}
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 offset-lg-1">
                    <div class="list-1 mt-5">
                        <ul class="list-unstyled">

                            @foreach ($deepServices as $deepServe)

                                <li class="d-flex align-items-center justify-content-center text-white mb-4">
                                    <i class="far fa-check-circle mr-2"></i>
                                    <span>{{ $deepServe->name() }}</span>
                                </li>
                                @if ($loop->iteration > 4)
                                @break
                            @endif
                            @endforeach
                    </div>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-3">
                    <div class="list-2 mt-md-1">
                        <ul class="list-unstyled">
                            @foreach ($deepServices as $deepServe)

                                @if ($loop->iteration < 6)

                                    <li class="d-flex align-items-center justify-content-center text-white mb-4">
                                        <i class="far fa-check-circle mr-2"></i>
                                        <span>{{ $deepServe->name() }}</span>
                                    </li>
                                @else
                                @break
                            @endif
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
    </section>
    <!-- ================================================== end services  ================================================================== -->

@endsection
