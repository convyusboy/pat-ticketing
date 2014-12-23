<?php

class UserRole extends Eloquent {
	protected $guarded = array('id');
	protected $fillable = array('name');
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_roles';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
}