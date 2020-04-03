<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'gaganpreet',
            'image' => '',
            'first_name' => 'gaganpreet',
            'last_name' => 'kaur',
            'email' => 'gaganpreet2811@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => '1',
        ]
           );
    }
}
