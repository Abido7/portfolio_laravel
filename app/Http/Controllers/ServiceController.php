<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $company =  Company::where('id', 1)->first();
        $data['services'] = $company->services->first();
        $data['baseServices'] = $company->services->first()->baseServices;
        $data['deepServices'] = $company->services->first()->deepServices;
        return view('web.services')->with($data);
    }
}