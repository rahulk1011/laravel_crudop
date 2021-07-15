<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'role_id' => '1',
			'name' => 'Admin',
			'username' => 'rahul',
			'email' => 'admin@rahul.com',
			'password' => bcrypt('Pass@123'),
		]);
		
		DB::table('users')->insert([
			'role_id' => '2',
			'name' => 'Author',
			'username' => 'rahul_author',
			'email' => 'author@rahul.com',
			'password' => bcrypt('Pass@123'),
		]);
    }
}
