<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        //courses that user have
        $user_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'paid');
        })->where('status',1)->get();
        //courses on cart
        $cart_courses = Course::whereHas('transaction.bracket', function ($query) use ($user) {
            $query->where('id_user', $user->id)->where('status', 'ongoing');
        })->get();

        $courses = Course::whereNotIn('id', $cart_courses->pluck('id'))
        ->whereNotIn('id', $user_courses->pluck('id'))
        ->where('status',1)
        ->get();
        return view('userPage.dashboardUser', compact('courses', 'user', 'user_courses'));
    }
    
    public function profile()
    {
        $user = Auth::user();
        return view('userPage.profilePage', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->all();
        if ($request->image != null) {
            $validate = Validator::make($data, [
                'image' => 'image|mimes:jpeg,png,jpg,|dimensions:min_width=100,min_height=100',
            ]);
            if ($validate->fails()) {
                return redirect('profile')->withErrors($validate);
            }
        }
        if (strlen($request->username) > 60 || strlen($request->username) < 3) {
            Session::flash('error', 'Username must be less than 60 characters and more than 3 characters');
            return redirect('profile');
        }
        if (User::select('Username')
            ->where('Username', $request->username)
            ->exists()
        ) {
            if ($request->username != Auth::user()->username) {
                Session::flash('error', 'Username already taken');
                return redirect('profile');
            }
        }
        if ($request->phone_number != null) {
            $validate = Validator::make($data, [
                'phone_number' => 'numeric|digits_between:10,12',
            ]);
            if ($validate->fails()) {
                return redirect('profile')->withErrors($validate);
            }
        }



        $id = Auth::user()->id;
        $user = User::find($id);
        if ($request->image != null) {
            if ($user->image != null) {
                unlink($user->image);
            }
            $uploadFolder = 'users';
            $image = $request->file('image');
            $image_uploaded_path = $image->store($uploadFolder, 'public');
            $uploadedImageResponse = basename($image_uploaded_path);

            $user->image = 'storage/users/' . $uploadedImageResponse;
        }

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
        ]);
        Session::flash('message', 'Profile updated successfully');
        return redirect('profile');
    }

}
