<?php
class Setting extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'settings';

	/**
	 * Get the setting data.
	 *
	 * @return string
	 */
	public function getData()
	{
		return $this->setting_data;
	}
}