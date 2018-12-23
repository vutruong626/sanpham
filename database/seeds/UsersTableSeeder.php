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
            'username' => 'admin',
            'fullname' => 'vu truong',
            'email' => 'admin',
            'phone' => '123456789',
            'address' => '7 quang trung',
            'password' => bcrypt('123456'),
        ]
    );
    }
}
