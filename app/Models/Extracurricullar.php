<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricullar extends Model
{
    use HasFactory;

    /**
     * The students that belong to the Extracurricullar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
        // Many to many, mengambil data dari model student, (relation dari sisi extracurricullar)
        // pivot key nya tabel student_extracurricullars,
        // pivot id => extracurricullar_id & student_id (dari sisi relation idnya di kiri)
        // perhatikan setiap tanda baca, baik itu penulisan dllz sedikit kesalahan pasti error
        return $this->belongsToMany(Student::class, 'student_extracurricullars', 'extracurricullar_id', 'student_id');
    }
}