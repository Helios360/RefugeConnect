<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class IndexController extends Controller
{
    public function index(){
        $animal=Animal::orderBy('id', 'desc')->get();
        return view('welcome', ['animal' => $animal]);
    }
}
