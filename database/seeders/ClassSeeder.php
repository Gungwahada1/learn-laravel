<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
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
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => '1A'],
            ['name' => '1B'],
            ['name' => '1C'],
            ['name' => '1D'],
        ];

        foreach ($data as $value) {
            // pastikan table kosong terlebih dahulu
            ClassRoom::insert([
                'name' => $value['name'],
                // can put data created at & updated at use Carbon::Now()
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}