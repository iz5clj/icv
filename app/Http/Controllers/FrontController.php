<?php

namespace App\Http\Controllers;

use App\Post;
use App\Message;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $m1 = Message::where('name', 'm1')->first();
        $m2 = Message::where('name', 'm2')->first();

        $posts = Post::all();

        return view('front.index', [
            'm1'           => $m1,
            'm2'           => $m2,
            'posts'        => $posts,
            'display_grid' => env('DISPLAY_GRID', false)
        ]);
    }
}
