<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserRolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('CourseContentTypesTableSeeder');
		$this->call('QuizQuestionTypesTableSeeder');
		$this->call('ForumFlagTypesTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('AssignmentsTableSeeder');
		$this->call('AssignmentAnswersTableSeeder');
		$this->call('ContactTypesTableSeeder');
		$this->call('CourseWeekTableSeeder');
	}

}

class UserRolesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('user_roles')->delete();

		$date = new DateTime;
		DB::table('user_roles')->insert(array(
			array('id' => 1,'name' => 'Murid', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Guru', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Moderator', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Administrator', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$date = new DateTime;
		DB::table('users')->insert(array(
			array('id' => 1, 'username' => 'admin', 'password' => Hash::make('admin'), 'first_name' => 'admin', 'last_name' => 'istrator', 'address' => 'itb', 'city' => 'bandung', 'country' => 'indonesia', 'phone' => '0', 'photo' => '0', 'gender' => 'Laki-laki', 'birth_date' => $date, 'birth_place' => 'bandung', 'email' => 'admin@admin.com', 'website' => 'haha', 'about_me' => 'hai', 'point' => 0, 'role_id' => 4, 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class CourseContentTypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('course_content_types')->delete();

		$date = new DateTime;
		DB::table('course_content_types')->insert(array(
			array('id' => 1,'name' => 'Video', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Audio', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Dokumen', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Presentasi', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 5,'name' => 'Lain-lain', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}


class QuizQuestionTypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('quiz_question_types')->delete();

		$date = new DateTime;
		DB::table('quiz_question_types')->insert(array(
			array('id' => 1,'name' => 'Pilihan ganda', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Isian singkat', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class ForumFlagTypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('forum_flag_types')->delete();

		$date = new DateTime;
		DB::table('forum_flag_types')->insert(array(
			array('id' => 1,'name' => 'Biasa', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Caci maki', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Iklan', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Tidak relevan', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();

		$date = new DateTime;
		DB::table('categories')->insert(array(
			array('id' => 1,'name' => 'Teknik', 'description' => 'Pembelajaran teknik', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Sains', 'description' => 'Pembelajaran sains', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Seni', 'description' => 'Pembelajaran seni', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Bisnis', 'description' => 'Pembelajaran bisnis', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('courses')->delete();

		$date = new DateTime;
		DB::table('courses')->insert(array(
			array('id' => 1,'category_id' => 1, 'name' => 'Kelas Masak', 'description' => 'masak masak', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'category_id' => 2, 'name' => 'Kelas Nyuci', 'description' => 'nyuci nyuci', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'category_id' => 3, 'name' => 'Kelas Jemur', 'description' => 'jemur jemur', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'category_id' => 1, 'name' => 'Kelas Nyapu', 'description' => 'nyapu nyapu', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class AssignmentsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('assignments')->delete();

		$date = new DateTime;
		DB::table('assignments')->insert(array(
			array('id' => 1,'course_id' => 2, 'question' => 'Masak apa ya?', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'course_id' => 2, 'question' => 'Enak gak ya?', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'course_id' => 3, 'question' => 'Nyuci yang bersih ya?', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class AssignmentAnswersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('assignment_answers')->delete();

		$date = new DateTime;
		DB::table('assignment_answers')->insert(array(
			array('id' => 1,'assignment_id' => 1, 'user_id' => 1, 'answer' => 'Nasi goreng', 'score' => 50, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'assignment_id' => 1, 'user_id' => 1, 'answer' => 'Nasi ayam', 'score' => 100, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'assignment_id' => 2, 'user_id' => 1, 'answer' => 'Ok', 'score' => 70, 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class ContactTypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('contact_types')->delete();

		$date = new DateTime;
		DB::table('contact_types')->insert(array(
			array('id' => 1,'name' => 'Pertanyaan', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Donasi', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Sponsor', 'created_at' => $date, 'updated_at' => $date)
			));
	}

}

class CourseWeekTableSeeder extends Seeder {

	public function run()
	{
		DB::table('course_weeks')->delete();

		$date = new DateTime;
		DB::table('course_weeks')->insert(array(
			array('id' => 1,'course_id' => 3, 'name'=> 'Pilot', 'description'=> 'Pengenalan Awal', 'order'=> 1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'course_id' => 3, 'name'=> 'Fundamental', 'description'=> 'Pendidikan Dasar-Dasar pelajaran', 'order'=> 2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'course_id' => 1, 'name'=> 'Pilot', 'description'=> 'Pilot lain', 'order'=> 3, 'created_at' => $date, 'updated_at' => $date)
			));
	}

}
