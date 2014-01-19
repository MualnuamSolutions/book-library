<?php
class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'admin',
			'fullname' => 'Administrator',
			'password' => Hash::make('pass'),
			'avatar' => '',
			'role' => 'administrator'
			));
	}
}