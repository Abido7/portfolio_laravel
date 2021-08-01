<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function home()
    {
        return $this->hasMany(Home::class);
    }
    public function abouts()
    {
        return $this->hasMany(About::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function socials()
    {
        return $this->hasMany(Social::class);
    }
}