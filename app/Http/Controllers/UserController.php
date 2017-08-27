<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $userID = $user->id;

        $visitor = auth()->user();

        $visitorId = $visitor->id;

        $visitorCurrentFollow = DB::table('follow')->where('who_follow', $visitorId )->pluck('to_follower');

        $countUserFollowing = DB::table('follow')->where('who_follow',  $userID )->pluck('to_follower')->count();
        $countUserFollowers = DB::table('follow')->where('to_follower',  $userID )->pluck('who_follow')->count();

        $nowFollow = false;

        $countFollowing = $visitorCurrentFollow->count();

        if ($visitorCurrentFollow->contains($userID)){

            $nowFollow = true;

        }

        return view('user', compact('user', 'users', 'nowFollow', 'countUserFollowing', 'countUserFollowers'));
    }
}
