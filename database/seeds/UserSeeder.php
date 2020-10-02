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
        $admin_role =  Role::where('nom','admin')->first();
        DB::table('users')->insert([
            'name' => 'Fouzia',
            'prenom' => '',
            'login' => 'fouzia@admin.com',
            'password' => bcrypt('adminadmin'),

        ]);
        $user = User::where('login','fouzia@admin.com')->first();
        $user->roles()->attach($admin_role);
    }
}
