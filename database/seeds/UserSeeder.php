<?php

use App\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role =  Role::where('name','Admin')->first();
        DB::table('users')->insert([
            'name' => 'Fouzia',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),

        ]);
        $user = User::where('email','admin@admin.com')->first();
        $user->roles()->attach($admin_role);
    }
}
