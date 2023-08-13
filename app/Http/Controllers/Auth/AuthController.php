<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Sign In'
        ];

        if (Auth::user() != null) {
            return redirect()->route('auth');
        } else {
            return view('auth.login', $data);
        }

    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            $user = User::where('email', $request->email);

            if($user->count() > 0) {
                if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                    $user = $user->with('role')->first();

                    if($user->role->name == 'admin') {
                        return redirect()->route('admin.dashboard');
                    } else {
                        return redirect()->route('user.home');
                    }
                } else {
                    return redirect()->back()->withErrors(['message' => 'password tidak sesuai']);
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'Username tidak sesuai']);
            }
        } catch(Exception $e){
            return redirect()->route('auth.login')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function register() {
        $data = [
            'title' => 'Register'
        ];

        return view('auth.register', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
        ]);

        $request->merge(['password' => Hash::make($request->password), 'role_id' => 2]);
        $user = User::create($request->only(['name', 'role_id', 'email','password']));

        return redirect()->route('auth')->with('success', 'your account has been created');

    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('welcome')->with('success', 'you are logout');

    }
}
