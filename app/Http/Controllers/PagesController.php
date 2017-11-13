<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
<<<<<<< HEAD
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

    public function blogs () {
      $blogs = Blog::all();

      return view('blogs', compact('blogs'));
    }

    public function blogsShow ($id) {
      $blog = Blog::findOrFail($id);
      return view('blogs.show')->with('blog', $blog);
    }
}
=======

class PagesController extends Controller
{
    //
    public function index () {
        $name = 'Harsh Thakkar';
        return view('index')->with('name', $name);
    }
}
>>>>>>> 09477b30104124f1c96934b8ba767b8760e3bbd8
