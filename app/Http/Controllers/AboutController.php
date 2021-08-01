<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $company =  Company::where('id', 1)->first();
        $data['abouts'] = $company->abouts;

        return view('web.about')->with($data);
    }
}