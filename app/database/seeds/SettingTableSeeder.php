<?php
class SettingTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('settings')->delete();
		
		Setting::create(array(
			'setting_key' => 'site_title',
			'setting_data' => 'Mualnuam Library Management Software',
			));

		Setting::create(array(
			'setting_key' => 'district',
			'setting_data' => 'Aizawl',
			));

		Setting::create(array(
			'setting_key' => 'district_code',
			'setting_data' => '01',
			));

		Setting::create(array(
			'setting_key' => 'logo',
			'setting_data' => '',
			));

		Setting::create(array(
			'setting_key' => 'copyright',
			'setting_data' => '&copy; Mualnuam Solutions',
			));

		Setting::create(array(
			'setting_key' => 'faculty_allowed',
			'setting_data' => '10',
			));

		Setting::create(array(
			'setting_key' => 'staff_allowed',
			'setting_data' => '8',
			));

		Setting::create(array(
			'setting_key' => 'student_allowed',
			'setting_data' => '5',
			));

		Setting::create(array(
			'setting_key' => 'temporary_allowed',
			'setting_data' => '1',
			));
	}
}