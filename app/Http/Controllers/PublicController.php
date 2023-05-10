<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct () {
        $this->middleware('auth');
    }
    public function welcome() {
        return view('welcome');
    }
public function profile (){
    return view ('profile');
}
public function articleNew () {
    return view ('article.new');
}
public function articleIndex () {
    return view ('article.index');
}
}
