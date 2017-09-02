<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $users = User::all();

        return view('feed', compact('user', 'users'));
    }
}
