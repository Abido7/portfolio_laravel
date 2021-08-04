<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Home extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function title($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->title)->$lang;
    }
    public function bio($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->bio)->$lang;
    }
}