<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function baseServices()
    {
        return $this->hasMany(BaseService::class);
    }

    public function deepServices()
    {
        return $this->hasMany(DeepService::class);
    }

    public function title($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->title)->$lang;
    }


    public function desc($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->desc)->$lang;
    }
}