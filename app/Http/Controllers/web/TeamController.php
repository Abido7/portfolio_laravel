<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamId = Role::select('id')
            ->whereNotIn('name', ['visitor', 'admin'])
            ->get();
        $data['teams'] = User::whereIn('id', $teamId)->get();
        return view('web.team')->with($data);
    }
}