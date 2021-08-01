<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamId = Role::select('id')->orderBy('id', 'ASC')
            ->where('name', '<>', 'admin')
            ->where('name', '<>', 'visitor')
            ->get();
        $data['teams'] = User::whereIn('id', $teamId)->get();
        return view('web.team')->with($data);
    }
}