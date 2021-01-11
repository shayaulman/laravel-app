<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
      return view('auth.register');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required|max:255',
        'username' => 'required',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed'
      ]);

      User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

      return redirect()->route('dashboard');
    }
}
