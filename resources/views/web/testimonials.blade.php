 @extends('web.layout')

 @section('title')
     Testimonials
 @endsection


 @section('content')

     <!-- ================================================== start testimonials section ==================================================== -->
     <section class="testimonials pt-5 bg-base d-flex flex-column align-items-center justify-content-center">
         <div class="container text-center my-5">
             <h2 class="text-uppercase text-light">{{ __('web.testimonialsTitle') }}</h2>
         </div>

         <div id="carouseltest" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                 <li data-target="#carouseltest" data-slide-to="0" class="active"></li>
                 <li data-target="#carouseltest" data-slide-to="1"></li>
             </ol>

             <div class="carousel-inner">

                 @foreach ($testimonials as $testimonial)

                     <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                         <div class="caption">
                             <div class="img">
                                 <img src="{{ asset("uploads/$testimonial->img") }}" class="rounded-circle" alt="" />
                             </div>
                             <h3 class="h3 w-100 text-center">{{ $testimonial->name }}</h3>
                             <p class="w-75 m-auto text-center">
                                 {{ $testimonial->comment }}
                             </p>
                             <p class="w-75 m-auto text-right pt-3 ">
                                 Time: {{ Carbon\Carbon::parse($testimonial->created_at)->format('m/d/Y, h A') }}
                             </p>
                         </div>
                     </div>

                 @endforeach



             </div>
             <a class="carousel-control-prev" href="#carouseltest" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouseltest" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>
         </div>
     </section>

     <!-- ================================================== end testimonials section ====================================== -->
 @endsection
