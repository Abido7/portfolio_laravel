<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Role;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.contact');
    }
    public function submit(Request $request)
    {
        $message = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric|min:6',
            'message' => 'required|string|max:5000',
        ]);
        // dd($message);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'company_id' => Role::where('id', 1)->first()->id,
        ]);
        $request->session()->flash('msg', 'your message sent success');
        return back();
    }
}