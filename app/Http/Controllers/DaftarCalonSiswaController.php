<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarCalonSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['murid'] = Student::all();
        return view('admin.pages.DaftarCalonSiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.DaftarCalonSiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return redirect()->route('admin.daftar-calon-siswa.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::with('user')->find($id);
        return view('admin.pages.DaftarCalonSiswa.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $student = Student::find($id);

        $user = User::find($student->user_id);

        $validatedData = $request->validate([
            'email'         => 'required|string|email|max:255|unique:users,email,'.$user->id,
            "nama_lengkap"  => ['required', 'string'],
            "nisn"          => 'required|numeric|unique:murid,nisn,'.$id,
            "tempat_lahir"  => ['required', 'string'],
            "tanggal_lahir" => ['required'],
            "no_telepon"    => ['required'],
            "status"        => ['required'],
        ]);

        $user->name = $validatedData['nama_lengkap'];
        $user->email = $validatedData['email'];
        if($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $student->nama_lengkap = $validatedData['nama_lengkap'];
        $student->nisn = $validatedData['nisn'];
        $student->tempat_lahir = $validatedData['tempat_lahir'];
        $student->tanggal_lahir = $validatedData['tanggal_lahir'];
        $student->no_telepon = $validatedData['no_telepon'];
        $student->status = $validatedData['status'];

        $student->save();

        if($student) {
            return redirect()->route('admin.daftar-calon-siswa.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->user->delete();
        $student->delete();
        return redirect()->route('admin.daftar-calon-siswa.index')->with('success','Daftar calon siswa berhasil dihapus');
    }
}
