<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        // cara lazy Loading
        // $class = ClassRoom::all();

        // cara Eager Loading
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->get();

        // mengurangi relasi agar halaman dapat cepat dimuat (clockwork)
        $class = ClassRoom::get();
        return view('classroom', ['classlist' => $class]);

        /*
        di dalam Laravel ada namanya Problem N+1

        perbedaan :
        - Lazy Loading  -> cara request data => buat query secara bertahap persatu-satu data, lebih lambat
        - Eager Loading -> cara request data => buat query secara bertahap sekalian, lebih cepat

        */
    }

    public function show($id)
    {
        $class = ClassRoom::find($id);
        return view('classroom-detail', ['classlist' => $class]);
        // dd($class);
    }
}