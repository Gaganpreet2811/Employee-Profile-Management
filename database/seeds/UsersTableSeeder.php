<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Gaganpreet',
                'image' => '',
                'first_name' => 'Gaganpret',
                'last_name' => 'kaur',
                'role' => 'admin',
                'email' => 'gaganpreet2811@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '9770296585',
                'address' => 'mansa',
                'gender' => 'female',
                'dob' => '1999-11-28',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'Mansa',
                'age' => '20',
            ]

        ]);
    }
}
