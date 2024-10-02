<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function change(Request $request){
        App::setlocale($request->select_lang);

        return redirect()->route('test',$request->select_lang);

    }
}
