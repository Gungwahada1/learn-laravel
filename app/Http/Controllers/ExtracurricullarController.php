<?php

namespace App\Http\Controllers;

use App\Models\Extracurricullar;
use Illuminate\Http\Request;

class ExtracurricullarController extends Controller
{
    public function index()
    {
        // kalau belum ada relasi pakai all() / Lazy Loading
        // kalau sudah ada relasi pakai with() / Eager Loading
        // $ekskul = Extracurricullar::with('students')->get();

        // mengurangi relasi agar halaman dapat cepat dimuat (clockwork)
        $ekskul = Extracurricullar::get();
        // dd($ekskul);
        return view('extracurricullar', ['ekskulList' => $ekskul]);
    }

    public function detail($id)
    {
        $ekskul = Extracurricullar::get();
        return view('extracurricullar-detail', ['ekskulList' => $ekskul]);
    }
}