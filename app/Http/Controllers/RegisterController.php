<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated_data = $request->validate([
            'nim' => ['required', 'digits:15', 'unique:users'],
            'nama' => 'required',
            'no_telp' => ['required', 'numeric'],
            'asal_lembaga' => 'required',
            'password' => ['required', 'confirmed']
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        $validated_data['role'] = 1;
        User::create($validated_data);

        return redirect()->route('login.index')->with(['success' => 'Berhasil mendaftar. Silakan melakukan login.']);
        dd($validated_data);
    }
}
