<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Emploee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'salary',
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d'
    ];

    protected $hidden = [

        ];

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::saving(function() {
//            Cache::forget('employeeAll');
//            Cache::forget('employee');
//        });
//    }

}
