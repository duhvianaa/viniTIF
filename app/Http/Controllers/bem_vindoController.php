<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bem_vindoController extends Controller
{
    public function bem_vindo_html(Request $request){
        return view('bem_vindo');
    }
}
