<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {

        $data['testimonials'] = Testimonial::get();
        return view('web.testimonials')->with($data);
    }
}