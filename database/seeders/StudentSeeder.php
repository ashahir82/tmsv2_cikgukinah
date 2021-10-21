<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            [
                 'id' => 1,
                 'name' => 'Aminah',
                 'ndp' => 'NDP0001',
                 'ic' => '908723671256',
                 'tel_no' => null,
                 'course_id' => 1,
                 'created_at' => '2021-10-20 11:57:23',
                 'updated_at' => '2021-10-20 11:57:23',
            ],
            [
                'id' => 2,
                'name' => 'Rahimah',
                'ndp' => 'NDP0002',
                'ic' => '908723671789',
                'tel_no' => '0178678865',
                'course_id' => 1,
                'created_at' => '2021-10-20 11:57:23',
                'updated_at' => '2021-10-20 11:57:23',
           ],
         ]);
    }
}
