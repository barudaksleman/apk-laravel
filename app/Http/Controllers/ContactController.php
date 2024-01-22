<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contackcontroller extends Controller
{
    public function index() {
        return view('/contactwebkollah' , [ "title" => "contact"]);
    }
    public function store(){
        
    }
}
