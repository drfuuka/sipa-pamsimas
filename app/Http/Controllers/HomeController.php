<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.pages.home');
    }

    public function checkStudentStatus()
    {
        return view('home.pages.kelulusan');
    }

    public function showStudentForm()
    {
        return view('auth.student.form-pendaftaran');
    }

    public function registerStudent(Request $request)
    {
        $validatedData = $request->validate([
            'nik'               => ['required','numeric'],
            'asal_sekolah'      => ['required'],
            'umur'              => ['required', 'numeric'],
            'jenis_kelamin'     => ['required'],
            'alamat'            => ['required'],
            'kebutuhan_khusus'  => ['required'],
            'disabilitas'       => ['required'],
            'kip'               => ['required', 'numeric'],
            'nama_ayah_kandung' => ['required'],
            'nama_ibu_kandung'  => ['required'],
            'nama_wali'         => ['required'],
        ]);

        $student = Student::find(Auth::user()->id);

        $student->nik               = $validatedData['nik'];
        $student->asal_sekolah      = $validatedData['asal_sekolah'];
        $student->umur              = $validatedData['umur'];
        $student->jenis_kelamin     = $validatedData['jenis_kelamin'];
        $student->alamat            = $validatedData['alamat'];
        $student->kebutuhan_khusus  = $validatedData['kebutuhan_khusus'];
        $student->disabilitas       = $validatedData['disabilitas'];
        $student->kip               = $validatedData['kip'];
        $student->nama_ayah_kandung = $validatedData['nama_ayah_kandung'];
        $student->nama_ibu_kandung  = $validatedData['nama_ibu_kandung'];
        $student->nama_wali         = $validatedData['nama_wali'];

        $student->save();

        if($student) {
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function studentList()
    {
        $data['student'] = Student::select('nisn', 'nama_lengkap', 'tempat_lahir', 'asal_sekolah')->whereNotNull('asal_sekolah')->get();

        return view('home.pages.data-pendaftar', $data);
    }
}
