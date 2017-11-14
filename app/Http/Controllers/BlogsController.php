<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blog;
use App\Http\Requests\BlogRequest;

class BlogsController extends Controller
{
    //

    # index function
    public function index () {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    # show function
    public function show ($id) {
        $blog = Blog::findOrFail($id);
        return view('blogs.show')->with('blog', $blog);
    }

    # create function
    public function create () {
        return view('blogs.create');
    }

    # store function
    public function store (BlogRequest $request) {
        $input = Request::all();

        Blog::create($input);

        return redirect('blogs');
    }

    # update function
    public function update () {

    }

    # edit function
    public function edit () {

    }

    # destroy function
    public function destroy () {

    }

}
