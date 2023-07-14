<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');

    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'nip' => ['required'],
            'password' => ['required']
        ]);

        // if (Auth::attempt(['nip' => $credentials['nip'], 'password' => $credentials['password']], $request->filled('remember'))) {
        //     $request->session()->regenerate();

        //     $user = Auth::user(); // Mengambil data pengguna yang terautentikasi

        //     if ($user->level === 'admin') {
        //         return redirect()->intended('/admin');
        //     } elseif ($user->level === 'dosen') {
        //         return redirect()->intended('/dosen');
        //     }
        // };
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
           return $this->manageRedirect();
        }

        return back()->withErrors([
            'nip' => 'Kredensial yang diberikan tidak cocok dengan catatan kami'
        ]);
    }

    public function manageRedirect(){
        return redirect(auth()->user()->level);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
}

}

