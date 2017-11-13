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

    public function blogs () {
      $blogs = Blog::all();

      return view('blogs', compact('blogs'));
    }

    public function blogsShow ($id) {
      $blog = Blog::findOrFail($id);
      return view('blogs.show')->with('blog', $blog);
    }
}