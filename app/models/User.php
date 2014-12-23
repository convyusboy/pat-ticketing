<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $guarded = array('id');
	protected $fillable = array('username',
            'password',
            'first_name',
            'last_name',
            'address',
            'city',
            'country',
            'phone',
            'photo',
            'gender',
            'birth_date',
            'birth_place',
            'email',
            'website',
            'fb_id',
            'about_me',
            'role_id',
            'last_login',
            'point');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getProfilePictureUrl()
	{
		return 'http://graph.facebook.com/'.$this->fb_id.'/picture';
	}

	public function role() 
	{
		return $this->belongsTo('UserRole');
	}

	public function getUnregisteredCourse($id_course) {
		$users = User::where(DB::raw('id NOT IN (SELECT user_id FROM course_participants WHERE course_id = 2)'))->get();
		return $users;
	}
}