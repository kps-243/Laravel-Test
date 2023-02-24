<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function showPage(){
        return view('welcome.blade.php');
    }
}
