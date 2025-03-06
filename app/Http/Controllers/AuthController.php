<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Tambahkan ini
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginFormAdmin()
    {
        return view('auth.loginAdmin');
    }
     // Proses login
     public function loginAdmin(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:1',
         ]);
 
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
             return redirect()->route('dashboard')->with('success', 'Login berhasil!');
         }
 
         return back()->withErrors(['email' => 'Email atau password salah!']);
     }
 
     // Menampilkan dashboard
     public function dashboardAdmin()
     {
         return view('dashboardAdmin'); // Buat file dashboard.blade.php di resources/views
     }
 
     // Logout
     public function logoutAdmin(Request $request)
     {
         Auth::logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect()->route('loginAdmin');
     }
     public function showForgotFormAdmin()
     {
         return view('auth.forgotPasswordAdmin'); 
     }

     public function forgotPasswordAdmin(Request $request)
     {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|min:1'
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // 
        ]);
    
        return redirect()->route('login')->with('success', 'Password berhasil direset! Silakan login.');
    }
}
