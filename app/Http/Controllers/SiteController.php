<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Http\Requests;
use App\Post;

class SiteController extends Controller
{
    public function showHome() {
    		$Posts = Post::all();
    		return view ('pages.home', compact('posts'));
    }

    public function showPost($slug) {
    		return view ('pages.post');
    }
}
