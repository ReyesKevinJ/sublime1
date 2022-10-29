<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(
            [
                'name'=>'Admin'
            ]
        );
        $role2=Role::create(
            [
                'name'=>'User'
            ]
        );
        Permission::create(['name'=>'admin.home'])->assignRole($role1);
        Permission::create(['name'=>'admin.productos.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.productos.create'])->assignRole($role1);
        Permission::create(['name'=>'admin.productos.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.productos.destroy'])->assignRole($role1);
        Permission::create(['name'=>'admin.pedidos.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.pedidos.show'])->assignRole($role1);
        Permission::create(['name'=>'admin.pedidos.destroy'])->assignRole($role1);
        Permission::create(['name'=>'admin.users.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.users.update'])->assignRole($role1);
        Permission::create(['name'=>'admin.users.edit'])->assignRole($role1);
    }
}
