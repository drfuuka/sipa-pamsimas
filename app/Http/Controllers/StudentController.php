<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::user()) {
            return redirect()->intended('/');
        }
        return view('auth.student.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'nisn'     => ['required', 'numeric'],
            'password' => ['required'],
        ]);

        $user = Student::where('nisn', $validatedData['nisn'])->first();

        if($user) {
            $credentials = [
                'email' => $user->user->email,
                'password' => $validatedData['password']
            ];

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect('/');
                
            }

            return back()->withErrors(['nisn' => 'Invalid NISN or Password']);
        } else {
            return back()->withErrors(['nisn' => 'Credentials not found']);
        }
    }

    public function showRegisterForm()
    {
        if (Auth::user()) {
            return redirect()->intended('/');
        }
        return view('auth.student.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
            "nama_lengkap"  => ['required', 'string'],
            "nisn"          => ['required', 'numeric','unique:murid'],
            "tempat_lahir"  => ['required', 'string'],
            "tanggal_lahir" => ['required'],
            "no_telepon"    => ['required'],
        ]);

        $user = User::create([
            'name'     => $validatedData['nama_lengkap'],
            'email'    => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $student = Student::create([
            "nama_lengkap"  => $validatedData['nama_lengkap'],
            "nisn"          => $validatedData['nisn'],
            "tempat_lahir"  => $validatedData['tempat_lahir'],
            "tanggal_lahir" => $validatedData['tanggal_lahir'],
            "no_telepon"    => $validatedData['no_telepon'],
            "user_id"       => $user->id
        ]);

        if($student) {
            return redirect()->route('login.index')->with('success','Akun berhasil dibuat! Login untuk melanjutkan');;
        } else {
            return redirect()->back();
        }

    }

    public function logout()
    {
       Auth::logout();
       return redirect('/');
    }
}
