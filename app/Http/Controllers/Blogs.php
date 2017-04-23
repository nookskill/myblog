<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Blog;

class Blogs extends Controller
{
    /**
     * Show all
     *
     * @return Response
     */
    public function index() {
        $blogs = Blog::all();
        return view('index')
            ->with('blogs',$blogs);
    }

    /**
     * create new post
     *
     * @return Response
     */
    public function create() {
        $title = Input::get('title');
        $content = Input::get('content');
        $blog = new Blog();
        $blog->title = $title;
        $blog->content = $content;
        $blog->save();
        return redirect('/');
    }

    public function getContentByID($id){
        $blog = Blog::where('id',$id)->first();
        return view('content')
            ->with('blog',$blog);
    }
}
