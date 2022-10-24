<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassRoom extends Model
{
    use HasFactory;

    // because name table in db not same with class here
    protected $table = 'class';

    /**
     * Get all of the comments for the ClassRoom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        // One To Many (1 kelas dimiliki banyak students)
        return $this->hasMany(Student::class, 'class_id', 'id');
        // menambahkan referensi primary karena laravel tidak tahu id kita dari nama class_id
    }

    /**
     * Get the homeroomTeacher that owns the ClassRoom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function homeroomTeacher()
    {
        // nested relations (class to teacher)
        // nested relations => relasi bersarang, atau relasi yang dapat terjadi dari relasi yang ada sebelumnya
        // pivot id teacher_id dari id teacher
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}