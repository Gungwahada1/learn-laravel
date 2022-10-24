<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class StudentController extends Controller
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
        // untuk memanggil nested relasi, maka dengan cara beri tanda titik (.)
        // contoh nested relasi seperti relasi class dan homeroomTeacher
        // karena student tidak ada relasi dengan teacher, maka ambil relasi dari class dengan homeroomTeacher
        // $student = Student::with(['class.homeroomTeacher', 'extracurricullars'])->get();

        // mengurangi relasi agar halaman dapat cepat dimuat (clockwork)
        $student = Student::get();
        // tampilkan di view student dengan studentlist
        return view('student', ['studentlist' => $student]);

        // var_dump('test');
        // dd($student);

        // $nilai = [9, 8, 7, 6, 4, 8, 6, 2, 2, 4, 8, 4, 7, 0, 2, 4, 7, 4, 1, 8, 6];

        // collection methods
        // average => menghitung rata-rata
        // $average = collect($nilai)->avg();
        // dd($average);

        // contains => cek sebuah array apakah memiliki sesuatu
        // $aaa = collect($nilai)->contains(function ($value) {
        //     return $value > 11;
        // });
        // dd($aaa);

        // diff
        // $restaurantA = ['burger', 'siomay', 'pizza', 'spaghetti', 'makaroni', 'martabak', 'bakso'];
        // $restaurantB = ['pizza', 'fried chicken', 'martabak', 'sayur asam', 'pecel lele', 'bakso'];
        // // untuk mengetahui menu di resto a yang berbeda dengan resto b
        // $menuRestoA = collect($restaurantA)->diff($restaurantB);
        // // untuk mengetahui menu di resto b yang berbeda dengan resto a
        // $menuRestoB = collect($restaurantB)->diff($restaurantA);
        // dd($menuRestoB);

        // filter
        // $aaa = collect($nilai)->filter(function ($value) {
        //     return $value > 7;
        // })->all();
        // dd($aaa);

        // pluck
        // $biodata = [
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'ani', 'umur' => 16],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 20],
        // ];
        // $aaa = collect($biodata)->pluck('nama')->all();
        // dd($aaa);

        // map
        // $aaa = collect($nilai)->map(function ($value) {
        //     return $value * 2;
        // })->all();
        // dd($aaa);
    }

    public function show($id)
    {
        // dd($id);

        // artinya mengambil data di model Student dengan mencari dari id nya
        // ketika pakai find => jika error, menampilkan letak error
        // ketika pakai findOrFail => jika error, menampilkan halaman 404 Not Found
        $student = Student::with(['class.homeroomTeacher', 'extracurricullars'])
            ->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }
}