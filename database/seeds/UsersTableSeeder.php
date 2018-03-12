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
        DB::table('users')->insert(
    		[
    			'email' => 'jfcr@live.com', 
    			'name' => 'Francisco Rodríguez',
    			'phone' => '9611221222',
    			'type' => 10,
    			'password' => bcrypt('secret')
    		]
);
    }
}
