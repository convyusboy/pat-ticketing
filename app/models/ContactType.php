<?php

	class ContactType extends Eloquent {
		protected $guarded = array('id');
		protected $fillable = array('name');
		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'contact_types';

		/**
		 * The attributes excluded from the model's JSON form.
		 *
		 * @var array
		 */
	}