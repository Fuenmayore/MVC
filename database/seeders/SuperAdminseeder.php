<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario =User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('supersecret')
        ]);

        $rol = Role::create(['name' => 'Administrador']);

        $permisos =Permission::pluck('id', 'id')->all();

        $rol->syncPermissions($permisos);

        $usuario->assignRole([$rol->id]);
    }
}