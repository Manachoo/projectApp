<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol0=Role::create([
            'name' => 'admin'
        ]);
        $rol1=Role::create([
            'name' => 'user'
        ]);

        Permission::create([
            'name' => 'admin.home'
        ]);
        Permission::create([
            'name' => 'admin.questions.index'
        ]);
        Permission::create([
            'name' => 'admin.questions.create'
        ]);
        Permission::create([
            'name' => 'admin.questions.edit'
        ]);
        Permission::create([
            'name' => 'admin.questions.destroy'
        ]);

    }
}
