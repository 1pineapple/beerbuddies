<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function fileUpload(Request $request){

        if($request->isMethod('post')){

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = md5(time()) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads/tempPhotoCandidate', $fileName);
                $tempFilePath = '/uploads/tempPhotoCandidate/'. $fileName;
            }
        }
        return response()->json(['success'=>'done']);
    }
}
