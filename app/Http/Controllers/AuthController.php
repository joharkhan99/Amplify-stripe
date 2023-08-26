<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json(['error_status' => true, 'errors' => $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return response()->json(['error_status' => false, 'user' => $user]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json(['error_status' => true, 'errors' => $validator->errors()]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
