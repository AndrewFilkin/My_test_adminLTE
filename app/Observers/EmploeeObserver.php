<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class EmploeeObserver
{
    public function created()
    {
        Cache::forget('employeeAll');
        Cache::forget('employee');
    }

    public function updated()
    {
        Cache::forget('employeeAll');
        Cache::forget('employee');
    }


}
