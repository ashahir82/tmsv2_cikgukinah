<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Rasyidah';
        $user->email = 'rasyidah@gmail.com';
        $user->password = Hash::make('pass1234');
        $user->save();

        $user = new User();
        $user->name = 'SuperAdmin';
        $user->email = 'super@gmail.com';
        $user->password = Hash::make('pass1234');
        $user->save();

        $user = User::create([
            'name' => 'rosli',
            'email' => 'rosli@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
