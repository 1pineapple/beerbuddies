<?php

namespace App\Http\Controllers;

use App\User;
use App\Follow;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(Request $request, $slug)
    {
        $whoFollow = auth()->user();

        $toFollow = User::select()->whereSlug($slug)->firstOrFail();

        $toFollowId = $toFollow->id;

        if($request->isMethod('get')){


            DB::table('follow')->insert(
                ['who_follow' => $whoFollow->id, 'to_follower' => $toFollowId]
            );

            return redirect('/user/' . $slug);

        }

        return null;
    }

    public function users()
    {
        $user = auth()->user();

        $users = User::all();

        return view('users', compact('user', 'users'));
    }

    public function unfollow(Request $request, $slug)
    {
        $whoUnFollow = auth()->user();

        $toUnFollow = User::select()->whereSlug($slug)->firstOrFail();

        $toUnFollowId = $toUnFollow->id;

        if($request->isMethod('get')){


            DB::table('follow')->insert(
                ['who_follow' => $whoUnFollow->id, 'to_follower' => $toUnFollowId]
            );

            DB::table('follow')->where(
                ['who_follow' => $whoUnFollow->id, 'to_follower' => $toUnFollowId])->delete();

            return redirect('/user/' . $slug);

        }

        return null;
    }
}
