<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\BaseController as GuestBaseController;
/**
 * БАзовый контроллер для всех контролеров управления админки
 *
 */
abstract class BaseController extends GuestBaseController
{

    /**
     * BaseController constructor
     */
    public function __construct()
    {

    }
}
