<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_id = User::firstorcreate([
            'name' => 'awan',
            'username' => 'awantau',
            'email' => 'awantau@gmail.com',
            'password' => bcrypt('awantau2016'),
        ]);

        $role = Role::firstOrcreate([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        $permission = [
            'User-List','User-Create','User-Update','User-Delete',
            'Role-List','Role-Create','Role-Update','Role-Delete',
        ];

        foreach($permission as $pem){
            Permission::firstorcreate([
                'name' => $pem,'guard_name' => 'web',
            ]);
        };

        $role->givePermissionTo($permission);
        $user_id->assignRole($role);
    }
}
