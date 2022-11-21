<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create(['name'=>'admin','email'=>'admin@gmail.com','password'=>'admin1234']);
        $rol1=Role::Create(['name'=>'admin']);
        $rol2=Role::Create(['name'=>'user_system']);
        $user->assignRole($rol1);
    }
}
