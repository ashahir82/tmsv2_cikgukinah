<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // vendor

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::create(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole($role);

        $role = Role::create(['name' => 'superadmin']);
        $user = User::find(2);
        $user->assignRole($role);
    }
}
