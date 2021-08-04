 @extends('web.layout')

 @section('title')
     Contact Us
 @endsection

 @section('styles')

     <style>
         /* hide arrow of input number */
         /* Chrome, Safari, Edge, Opera */
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
             -webkit-appearance: none;
             margin: 0;
         }

         /* Firefox */
         input[type=number] {
             -moz-appearance: textfield;
         }

         /* disable resize of texterea */

         textarea {
             resize: none
         }

     </style>

 @endsection
 @section('content')
     <!-- ================================================== start contact section ==================================================== -->

     <section class="contact bg-base d-flex justify-content-center align-items-center pt-5" id="contact">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-lg-12">
                     <div class="contact-title">
                         <h2 class="h2 pt-4 m-0">{{ __('web.contactTitle') }}</h2>
                         <p class="lead m-0">{{ __('web.contactBio') }}</p>
                     </div>
                     <p class="text-info text-capitalize text-center">
                         {{ session()->get('msg') }}
                     </p>
                     <form action="{{ route('contact.submit') }}" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input class="form-control mb-2" placeholder="Enter Your Name" type="text"
                                         name="name" />
                                     @error('name')
                                         <p class="text-danger">
                                             {{ $message }}*
                                         </p>
                                     @enderror
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input class="form-control mb-2" placeholder="Enter your Phone" type="number"
                                         name="phone" />
                                     @error('phone')
                                         <p class="text-danger">
                                             {{ $message }}*
                                         </p>
                                     @enderror
                                 </div>
                             </div>

                             <div class="col-md-12">
                                 <div class="form-group">
                                     <input class="form-control mb-2" placeholder="Enter Your Email" type="email"
                                         name="email" />
                                     @error('email')
                                         <p class="text-danger">
                                             {{ $message }}*
                                         </p>
                                     @enderror
                                 </div>
                             </div>

                             <div class="col-md-12">
                                 <div class="form-group">
                                     <textarea class="form-control" placeholder="Enter your message..." name="message"
                                         rows="4"></textarea>
                                     @error('message')
                                         <p class="text-danger">
                                             {{ $message }}*
                                         </p>
                                     @enderror
                                 </div>
                             </div>
                         </div>
                         <button type="submit" name="submit">{{ __('web.sendMessage') }}</button>
                     </form>
                 </div>
             </div>
         </div>
     </section>

     <!-- ================================================== end contact  ==================================================== -->
 @endsection
