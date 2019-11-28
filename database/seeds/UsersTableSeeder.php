<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleUser = Role::where('name', 'user')->first();

        $admin = User::Create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'password' => Hash::make('password'),

        ]);

        
        $user = User::Create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '0123456788',
            'password' => Hash::make('password'),

        ]);

        $admin->roles()->attach($roleAdmin);
        $user->roles()->attach($roleUser);

    
    }
}
