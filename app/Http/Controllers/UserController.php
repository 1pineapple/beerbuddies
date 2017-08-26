<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($slug)
    {

        $user = User::select()->whereSlug($slug)->firstOrFail();
        
        $users = User::all();

        return view('user', compact('user', 'users'));
    }
}
