<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
           [
                'id' => 1,
                'code' => 'AES001',
                'name' => 'Algorithm',
                'is_active' => 1,
                'created_at' => '2021-10-20 11:57:23',
                'updated_at' => '2021-10-20 11:57:23',
           ],
           [
                'id' => 2,
                'code' => 'AES002',
                'name' => 'Algorithm II',
                'is_active' => 1,
                'created_at' => '2021-10-20 11:57:23',
                'updated_at' => '2021-10-20 11:57:23',
            ]
        ]);

        // DB::table('courses')->insert([]); // single object
        // DB::table('courses')->insert([ // multiple object
        //     [],
        //     [],
        // ]);
    }
}
