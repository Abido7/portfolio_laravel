 @extends('web.layout')

 @section('title')
     Our Team
 @endsection


 @section('content')

     <!-- ================================================== start team section ========================================================= -->

     <section class="team bg-base vh-100" id="team">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="team-title text-center my-5">
                         <h2 class="text-capitalize">{{ __('web.teamTitle') }}</h2>
                         <p>{{ __('web.teamBio') }}</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 @foreach ($teams as $member)
                     <div class="col-sm-6 col-lg-3">
                         <div class="team-member">
                             <img src="{{ asset("uploads/$member->img") }}" class="img-fluid" alt="team-member" />
                             <div class="layer d-flex flex-column justify-content-between">
                                 <div class="team-social mt-3 ml-3">
                                     <ul class="list-unstyled d-flex flex-cou align-items-center">
                                         @foreach ($member->socials as $social)
                                             <li>
                                                 <a href="{{ url($social->facebook) }}"
                                                     class="fab fa-facebook-f text-decoration-none text-white pr-3"></a>
                                             </li>
                                             <li>
                                                 <a href="{{ url($social->twitter) }}"
                                                     class="fab fa-twitter text-decoration-none text-white pr-3"></a>
                                             </li>
                                             <li>
                                                 <a href="{{ url($social->linkedin) }}"
                                                     class="fab fa-linkedin-in text-decoration-none text-white pr-3"></a>
                                             </li>
                                         @endforeach

                                     </ul>
                                 </div>
                                 <div class="title text-white mb-3 ml-3 font-weight-bold">
                                     <h5 class="text-uppercase">{{ $member->name }}</h5>
                                     <span class="font-weight-light">{{ $member->role->name }}</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>

     <!-- ================================================== end team ======================================================================= -->
 @endsection
