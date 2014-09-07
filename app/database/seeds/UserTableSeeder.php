<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		
		User::create([
			'username'	=>	'Bryan',
			'email'		=>	'bryan@mndz.com',
			'password'	=>	'1234'
		]);

		User::create([
			'username'	=>	'Jaz',
			'email'		=>	'jazmin.serrano@dipaolamarquez.com',
			'password'	=>	'1234'
		]);
	}

}
