<?php

namespace App\Http\Controllers\Frontend\Modules\Page1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index(){
        return view('frontend.modules.page1.page1');
    }
}
