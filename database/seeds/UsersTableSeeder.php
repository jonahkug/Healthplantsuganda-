<?php

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
    	if (DB::table('roles')->insert([
    		'slug' => 'admin',
    		'name' => 'Admin',
    		'permissions' => '',
    		'created_at' => now(),
    		'updated_at' => now(),
    	])) {
          // seed users
    		$credentials = [
    			'first_name' => 'Jamie',
    			'last_name' => 'Jonah',
    			'email' => 'kisorojonah@gmail.com',
    			'password' => 'healthplants'
    		];

    		$user = Sentinel::registerAndActivate($credentials);
    		$role = Sentinel::findRoleBySlug('admin');
    		$role->users()->attach($user);
    	}
    }
}