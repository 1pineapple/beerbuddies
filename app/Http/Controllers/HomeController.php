<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    File,
    Image;

use App\User;

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
        $users = User::all();

        return view('home', compact('users'));
    }

    public function fileUpload(Request $request){

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
}
