<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class PagesController extends Controller
{
    public function contact () {
      $people = [
        'Mike',
        'Harsh',
        'Deep'
      ];
      return view('contact', compact('people'));
    }

    public function blogs () {}
    public function blogsShow ($id) {}
    public function blogsCreate () {}
}
