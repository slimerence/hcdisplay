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

    public function return(){
        $this->dataForView['menuName'] = 'return';
        return view(
            _get_frontend_theme_path('pages.return'),
            $this->dataForView
        );
    }

    public function term(){
        //return response()->download( public_path(). '/download/terms.pdf');
        $this->dataForView['menuName'] = 'term';
        return view(
            _get_frontend_theme_path('pages.term'),
            $this->dataForView
        );
    }
}