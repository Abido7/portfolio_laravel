<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $company =  Company::first();
        $data['about'] = $company->about;

        return view('web.about')->with($data);
    }
}