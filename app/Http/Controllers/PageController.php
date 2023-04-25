<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("index");
    }

    public function curso(Curso $curso){
        return view("curso", compact('curso')); //en este caso como la llave y en valor en el array son el mismo, se puede escribir asi: compact('curso')
    }
}
