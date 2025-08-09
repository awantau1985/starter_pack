<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user_id = User::create([
            'name' => 'awan',
            'username' => 'awan',
            'email' => 'awantau@gmail.com',
            'password' => bcrypt('awantau2016'),
            // 'user_status' => 'Active',
            // 'divisi' => 'IT',
            // 'role_id' => $role_id->id,
            // 'divisi_id' => $divisi_id->id,
            // 'employee_id',
        ]);
    }
}
