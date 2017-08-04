<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function index () {
        $name = 'Harsh Thakkar';
        return view('index')->with('name', $name);
    }
}
