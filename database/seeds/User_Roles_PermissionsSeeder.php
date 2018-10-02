<?php

use Illuminate\Database\Seeder;
use \App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class User_Roles_PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'schools list']);
        Permission::create(['name' => 'schools create']);
        Permission::create(['name' => 'schools edit']);
        Permission::create(['name' => 'schools show']);
        Permission::create(['name' => 'schools delete']);
        Permission::create(['name' => 'schools owner']);
        Permission::create(['name' => 'articles list']);
        Permission::create(['name' => 'articles create']);
        Permission::create(['name' => 'articles edit']);
        Permission::create(['name' => 'articles show']);
        Permission::create(['name' => 'articles delete']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'main']);
        $role->givePermissionTo(['schools owner', 
                                    'articles list', 
                                    'articles create', 
                                    'articles edit', 
                                    'articles show', 
                                    'articles delete'
        ]);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::create([
            'name' => 'مهدی خورشیدی',
            'email' => 'mahdikhorshidi@gmail.com',
            'password' => bcrypt('babish'),
        ]);

        $user = User::findOrFail(1);
        
        $user->assignRole('super-admin');
    }
}
