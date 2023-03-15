<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $motos = Moto::paginate(10);
        return view('index',compact('motos'));
    }
}
