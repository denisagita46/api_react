<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{
	
	public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
      
		if ($user) {
                return response()->json([
                    'success' => true,
                    'message' => 'berhasil di create',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'tidak berhasil create!',
                ], 401);
            }
    }
}
