<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\permission;
use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'admin',
            'email' => 'admin@gmail.com',
            'password'=> 'asdasd'
        ]);
        User::create([
            'name'=> 'user',
            'email' => 'user@gmail.com',
            'password'=> 'asdasd'
        ]);

        role::create([
            'name'=> 'admin',
            'details' => 'Create , Update , Delete , Read',
            'create'=>true,
            'edit'=>true,
            'read'=>true,
            'delete'=>true,
            'users_access'=>true,
            'roles_access'=>true
        ]);
        role::create([
            'name'=> 'sub-admin',
            'details' => 'Create , Update , Read',
            'create'=>true,
            'edit'=>true,
            'read'=>true,
            'delete'=>false,
            'users_access'=>true,
            'roles_access'=>true
           
        ]);
        role::create([
            'name'=> 'editor',
            'details' => 'Update , Read',
            'create'=>false,
            'edit'=>true,
            'read'=>true,
            'delete'=>false,
            'users_access'=>true,
            'roles_access'=>true
           
        ]);
        role::create([
            'name'=> 'viewer',
            'details' => 'Readonly',
            'create'=>false,
            'edit'=>false,
            'read'=>true,
            'delete'=>false,
            'users_access'=>true,
            'roles_access'=>true
           
        ]);

    
    }
}
