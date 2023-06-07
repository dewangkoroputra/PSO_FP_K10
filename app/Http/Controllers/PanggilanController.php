<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Http\RedirectResponse;


class PanggilanController extends Controller
{
    public function create()
    {
        return view('formlaporan');
    }
    public function panggil(Request $request)
    {
        $userId = $request->input('user_id'); // Retrieve the user's ID from the request

        // Store the ID using the User model
        $user = User::find($userId);
        $user->stored_id = $userId;
        $user->save();

        return Redirect::to('/homepage'); // Redirect to another page
    }

    public function index(Request $request)
    {
        $userId = Auth::user()->id;
        $userName = Auth::user()->name;
        return view('teslogout',compact('userName')); // Redirect to another page
    }
}
