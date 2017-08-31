<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class EditProfileController extends Controller
{

    public function index()
    {
        $slug = auth()->user()->slug;
        $user = User::select()->whereSlug($slug)->firstOrFail();
        $users = User::all();

        return view('edit-profile', compact('user', 'users'));
    }

    public function editProfile(Request $request)
    {
        $user = auth()->user();

        if($request->isMethod('post')){

            $this->validate(request(), [
               'fullname' => 'regex:/^[a-zA-Z ]+$/|nullable',
               'age' => 'numeric|nullable',
               'location' => 'regex:/^[a-zA-Z ]+$/|nullable'
            ]);
            

            $user->full_name = request('fullname');
            $user->age = request('age');
            $user->location = request('location');

            $user->save();

            return redirect(route('home'));

        }

    }
}
