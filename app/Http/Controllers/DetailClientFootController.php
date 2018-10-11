<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailClientFootController extends Controller
{
    public function index() {
    	return view('Client.foodDetail');
    }
}
