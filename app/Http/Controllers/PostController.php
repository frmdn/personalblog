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
}
