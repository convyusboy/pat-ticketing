<?php

	class Contact extends Eloquent {
		protected $guarded = array('id');
		protected $fillable = array('name', 'email', 'message', 'contact_type_id');
		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'contacts';

		/**
		 * The attributes excluded from the model's JSON form.
		 *
		 * @var array
		 */
	}