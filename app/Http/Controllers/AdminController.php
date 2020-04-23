<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $laravel  = app();
        $version  = $laravel::VERSION;

        $users    = User::count();
        $messages = Message::count();

        return view('dashboard', [
            "version"  => $version,
            "users"    => $users,
            'messages' => $messages
        ]);
    }
}
