<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data['homes'] = Home::paginate(10);
        // dd($home);
        return view('admin.home.index')->with($data);
    }

    public function show(Home $home)
    {
        $data['home'] = $home;
        $data['social'] = $home->company->social;
        // dd($data['social']);
        return view('admin.home.show')->with($data);
    }
    public function store(Request $request)
    {
        $rsl = $request->validate([
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:100',
            'bio_en' => 'required|string|max:150',
            'bio_ar' => 'required|string|max:100',
            'img' => 'required|mimes:jpeg,jpg,png|dimensions:min_width=1920,min_height=1280|max:2048',
            // 'facebook' => 'required|url|max:255',
            // 'twitter' => 'required|url|max:255',
            // 'instagram' => 'required|url|max:255',
        ]);
        $imgPath = Storage::disk('uploads')->put('home', $request->img);
        Home::create([
            'title' => json_encode([
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ]),
            'bio' => json_encode([
                'en' => $request->bio_en,
                'ar' => $request->bio_ar,
            ]),
            'img' => $imgPath,
            'company_id' => 1,
        ]);

        // Home::first()->socials()->create([
        //     'facebook' => $request->facebook,
        //     'twitter' => $request->twitter,
        //     'instagram' => $request->instagram,
        //     'company_id' => 1,
        // ]);
        return back();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => 'required|exists:homes,id',
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:100',
            'bio_en' => 'required|string|max:150',
            'bio_ar' => 'required|string|max:100',
            'img' => 'nullable|mimes:jpeg,jpg,png|dimensions:min_width=1920,min_height=1280|max:2048',
        ]);

        $home = Home::findOrFail($request->id);
        $imgPath = $home->img;

        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete($imgPath);
            $imgPath = Storage::disk('uploads')->put('home', $request->img);
        }
        $home->update([
            'title' => json_encode([
                'en' => $request->title_en,
                'ar' => $request->title_ar,

            ]),
            'bio' => json_encode([
                'en' => $request->bio_en,
                'ar' => $request->bio_ar,

            ]),
            'img' => $imgPath,
        ]);
        return back();
    }

    public function delete(Request $request)
    {
        $request->validate([
            'deleted_id' => 'required|exists:homes,id'
        ]);
        $home = Home::findOrFail($request->deleted_id);
        Storage::disk('uploads')->delete($home->img);
        $home->delete();
        return back();
    }
}