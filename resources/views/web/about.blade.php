 @extends('layout')

 @section('title')
     About
 @endsection

 @section('content')
     <!-- ================================================== start about section =============================================== -->

     <section class="about bg-base text-white vh-100 d-flex justify-content-center align-items-center" id="about">
         <div class="container">
             <div class="row">
                 @foreach ($abouts as $about)

                     <div class="col-12">
                         <div class="about-content text-center">
                             <h3 class="text-uppercase">{{ $about->title() }}</h3>
                             <p>
                                 {{ $about->desc() }}
                             </p>
                             <a href="#" class="btn btn-outline-light text-white p-2">{{ __('web.MoreBtn') }}</a>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>
     <!-- ================================================== end about ========================================================= -->

 @endsection
