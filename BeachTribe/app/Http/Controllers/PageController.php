<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function index()
    {
        return view('index'); 
    }
    public function calendarioDeAulas()
    {
        return view('CalendarioDeAulas'); 
    }
    public function contactos()
    {
        return view('contactos'); 
    }
    public function surf()
    {
        return view('surf'); 
    }
    public function eventos()
    {
        return view('eventos'); 
    }
}


