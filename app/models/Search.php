<?php

class Search extends Eloquent {
	protected $guarded = array('id');
	protected $fillable = array('value');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'searches';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
}