<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Extracurricullar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    // memberitahu nama tabel ke laravel (jika nama tabel tidak plural (tanpa s dibelakangnya),
    // jika nama tabel sudah berisi s dibelakangnya tidak perlu memberitahu laravel lagi)
    // protected $table = 'students';

    // memberitahu primary key ke laravel (Jika nama id tidak id -> contoh : student_id)
    // protected $primarykey = 'student_id';

    // dengan ini kita bisa memberitahu laravel bahwa id bukan auto increment
    // public $incrementing ='false';

    // memberitahu laravel bahwa tipe primary key BUKAN integer
    // protected $keytype = 'string';

    // memberitahu laravel bahwa tidak ada created at & updated at di database
    // jadi pada saat mass assignment tidak menginputkan data created at & updated at dan tidak akan error
    // jika pada database sudah ada created at & updated at, maka tidak perlu menambahkan dibawah ini, mass assignment akan otomatis menambahkannya
    // public $timestamps = false;
    // mass assginment ==> menginputkan data secara banyak ke database di laravel

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        // Many to One (One to One) use BelongsTo (banyak/satu student mempunyai 1 kelas)
        return $this->belongsTo(ClassRoom::class);
    }

    /**
     * The extracurricullar that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function extracurricullars()
    {
        // Many to many, mengambil data dari model extracurricullar, (relation dari sisi student)
        // pivot key nya tabel student_extracurricullars,
        // pivot id => student_id & extracurricullar_id (dari sisi relation idnya di kiri)
        // perhatikan setiap tanda baca, baik itu penulisan dllz sedikit kesalahan pasti error
        return $this->belongsToMany(Extracurricullar::class, 'student_extracurricullars', 'student_id', 'extracurricullar_id');
    }

    /**
     * Get the homeroomTeacher that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function homeroomTeacher()
    {
        // nested relations (student to teacher)
        // nested relations => relasi bersarang, atau relasi yang dapat terjadi dari relasi yang ada sebelumnya
        // pivot id teacher_id dari id teacher
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}