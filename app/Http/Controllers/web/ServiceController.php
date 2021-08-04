<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $company =  Company::where('id', 1)->first();
        $data['service'] = $company->service->first();
        $data['baseServices'] = $data['service']->baseServices;
        $data['deepServices'] = $data['service']->deepServices;
        return view('web.services')->with($data);
    }
}