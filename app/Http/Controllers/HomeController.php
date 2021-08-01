<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Home;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company_id = Company::first()->id;
        $data['homes'] = Home::get();
        $data['socials'] = Social::select('facebook', 'twitter', 'instagram')->where('company_id', $company_id)->first();
        // dd($data['socials']);
        return view('web.home')->with($data);
    }
}