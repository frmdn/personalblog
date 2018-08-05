<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
    	$data = Post::orderBy('created_at','desc')->get();
    	return view('public.latest',compact('data'));
    }

    public function create()
    {
    	return view('post.create');
    }

    public function store()
    {
    	Post::create(request()->all());

    	return redirect()->home();
    }

    public function show($id)
    {
    	$data = Post::find($id);
    	return view('post.show', compact('data'));
    }
}
