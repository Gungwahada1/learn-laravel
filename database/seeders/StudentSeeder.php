<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // untuk menghapus table yang berelasi dengan tabel lain, sehingga
        // perlu disable dulu, truncate, lalu di enable kembali.
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Ayu', 'gender' => 'P', 'nis' => '1234567890', 'class_id' => 2],
        //     ['name' => 'Budi', 'gender' => 'L', 'nis' => '0987654321', 'class_id' => 2],
        //     ['name' => 'Turah', 'gender' => 'L', 'nis' => '5437659872', 'class_id' => 1],
        //     ['name' => 'Agung', 'gender' => 'L', 'nis' => '1237659873', 'class_id' => 3]
        // ];

        // foreach ($data as $value) {
        //     // pastikan table kosong terlebih dahulu
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         // can put data created at & updated at use Carbon::Now()
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        // panggil factory/faker
        Student::factory()->count(20)->create();
    }
}