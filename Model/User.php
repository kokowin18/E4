<?php

class User extends AppModel{

	public $validate = array(
		'first_name' => array(
			'rule'=>'notEmpty',
			'message'=>'Please fill in firstname'
			),
		'last_name' => array(
			'rule'=>'notEmpty',
			'message'=>'Please fill in lastname'
			),
		'username' => array(
			'rule'=>'notEmpty',
			'message'=>'Please fill in username'
			),
		'aycode' => array(
			'rule'=>'notEmpty',
			'message'=>'Please fill in aycode'
			),
		'password' => array(
			'rule'=>'notEmpty',
			'message'=>'Please fill in password'
			)			
			);
}

?>