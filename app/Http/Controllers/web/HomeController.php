<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Home;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $data['homes'] = $company->homes;
        $data['socials'] = $company->Social->first();
        return view('web.home')->with($data);
    }
}