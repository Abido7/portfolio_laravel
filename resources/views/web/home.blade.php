 @extends('web.layout')

 @section('title')
     Home
 @endsection

 @section('content')
     <!-- ================================================== start home =============================================== -->
     <header>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">

                 <ol class="carousel-indicators">
                     @foreach ($homes as $home)

                         <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}"
                             class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
                     @endforeach
                 </ol>
                 @foreach ($homes as $home)

                     <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                         <div class="landed-img vh-100">
                             <img class="img-fluid" src="{{ asset("uploads/$home->img") }}" alt="">
                         </div>
                         <div class="w-100 vh-100">
                             <div class="overlay">
                                 <div class="caption text-center text-white">
                                     <h1 class="font-weight-bolder text-capitalize">
                                         {{ $home->title() }}
                                     </h1>
                                     <p>{{ $home->bio() }}</p>
                                     <ul class="list-unstyled d-flex flex-row justify-content-center align-items-center">
                                         @isset($socials->facebook)
                                             <li>
                                                 <a href="{{ url("$socials->facebook") }}" class="fab fa-facebook-f"></a>
                                             </li>
                                         @endisset
                                         @isset($socials->twitter)
                                             <li>
                                                 <a href="{{ url("$socials->twitter") }}" class="fab fa-twitter"></a>
                                             </li>
                                         @endisset
                                         @isset($socials->instagram)
                                             <li>
                                                 <a href="{{ url("$socials->instagram") }}" class="fab fa-instagram"></a>
                                             </li>
                                         @endisset
                                     </ul>
                                     <a class="bt" href="{{ route('services') }}">{{ __('web.MoreBtn') }}</a>
                                     <a class="bt" href="{{ route('contact') }}">{{ __('web.contactBtn') }}</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
             <div class="arrow-position">
                 <a class="carousel-control-prev arrow" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="fas fa-arrow-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     <div class="arrow-hover arrow-hover-prev"></div>
                 </a>
                 <a class="carousel-control-next arrow" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="fas fa-arrow-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     <div class="arrow-hover arrow-hover-next"></div>
                 </a>

             </div>
         </div>
     </header>
     <!-- ================================================== end home ========================================================== -->
 @endsection
