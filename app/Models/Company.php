<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function homes()
    {
        return $this->hasMany(Home::class);
    }


    public function about()
    {
        return $this->hasOne(About::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function social()
    {
        return $this->hasOne(Social::class);
    }
}