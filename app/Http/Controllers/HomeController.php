<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use File;
use Image;
use App\Beers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $users = User::all();

        $countFollowing = DB::table('follow')->where('who_follow', $user->id )->pluck('to_follower')->count();
        $countFollowers = DB::table('follow')->where('to_follower', $user->id )->pluck('who_follow')->count();

        return view('home', compact('user', 'users', 'countFollowing', 'countFollowers'));
    }

    public function fileUpload(Request $request)
    {

        $user = auth()->user();

        if($user->ava_path != null){
            File::delete(public_path() . '/uploads/userPhoto/' . $user->ava_path );
        }

        if($request->isMethod('post')){

            if($request->hasFile('userPhoto')) {
                $file = $request->file('userPhoto');
                $fileName = md5(time()) . '.' . $file->getClientOriginalExtension();

                $img = Image::make($file->getFileInfo()->getPathname())->resize(200, 200);
                $img->save(public_path() . '/uploads/userPhoto/' . $fileName);

                $tempFilePath = '/uploads/userPhoto/'. $fileName;
                $user->ava_path = $fileName;
                $user->save();

                return response()->json(['url'=>$tempFilePath]);
            }
        }
        return null;
    }

    public function drank(Request $request)
    {
        $user = auth()->user();

        $beer = new Beers;

        $beer->user_id = $user->id;
        $beer->beer_name = $request['beer-name'];
        $beer->beer_count = $request['beer-count'];
        $beer->beer_date = $request['beer-date'];
        $beer->save();

        return view('feed');
    }
}
