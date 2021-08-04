<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
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