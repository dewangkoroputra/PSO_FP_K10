<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\panggilan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class TelfonController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'user_id' => 'required'
        ]);

        panggilan::create([
            'user_id'=> request('user_id'),
            'Calltime'=> date('Y-m-d H:i:s')
        ]);
        return response()->json(array('msg'=> 'Success'), 200);
    }
}
