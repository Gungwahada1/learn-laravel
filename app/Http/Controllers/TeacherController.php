<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // Eloquent ORM (Recommended)
        // Query Builder (Enough Okey)
        // Raw Query (Not Recommended)

        // ambil semua data dari model (LEZY LOADING)
        // $student = Student::all();

        // diganti jadi seperti dibawah ini jika sudah mempunyai relasi (EAGER LOADING =>recommended)
        // berelasi dengan class & extracurricullar di Student Model, karena lebih dari 1 jadi menggunakan array
        $teacher = Teacher::all();
        // tampilkan di view student dengan studentlist
        return view('teacher', ['teacherList' => $teacher]);
    }
}