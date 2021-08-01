<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class DeepService extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function name($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->name)->$lang;
    }
}