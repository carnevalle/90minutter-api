<?php

class Player extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'firstname' => 'required',
		'lastname' => 'required',
		'nickname' => 'required',
		'birthday' => 'required',
		'height' => 'required',
		'weight' => 'required'
	);
}
