<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->login_as === "Login As") {
            return redirect()->route('login');
        }

        if ($request->login_as === "admin") {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('dashboard_admin');
            }

            return redirect()->route('login');
        } else if ($request->login_as === 'siswa') {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ]);

            if (Auth::guard('siswa')->attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('dashboard_siswa');
            } else {
                return redirect()->route('login');
            }
        }
    }
    public function register(Request $request)
    {
        $users = Siswa::all();
        
        if ($request->confirm_password == $request->password) {
            foreach($users as $user) {
                // kalo email udah ada sebelumnya
                if ($user['email'] == $request->email) {
                    return 'sudah ada';
                } else {
                    return 'belum ada';
                }
            }
        } else {
            return "ngga oke";
        }
        
        if ($request->login_as === "Login As") {
            return redirect()->route('login');
        }

        if ($request->login_as === "admin") {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('dashboard_admin');
            }

            return redirect()->route('login');
        } else if ($request->login_as === 'siswa') {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8'],
            ]);

            if (Auth::guard('siswa')->attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('dashboard_siswa');
            } else {
                return redirect()->route('login');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('login');
    }
}
