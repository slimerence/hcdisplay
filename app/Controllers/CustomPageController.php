<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/28
 * Time: 23:35
 */

namespace Smartbro\Controllers;

use App\Http\Controllers\Controller;

class CustomPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function about(){

        return view(_get_frontend_theme_path('pages.about'),$this->dataForView);
    }
}