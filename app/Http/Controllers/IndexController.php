<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index() {

        return view('index');
    }
    public function contact() {

        return view('contact');
    }
    public function tarifs() {

        return view('tarifs');
    }
    public function galerie() {

        return view('galerie');
    }


    public function epilationlazer() {

        return view('epilationlazer');
    }
    public function technologies() {

        return view('technologies');
    }

    public function about() {

        return view('about');
    }
    public function chequesCad() {

        return view('chequesCad');
    }
    public function bonAchat() {

        return view('bonAchat');
    }



}
