// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->insert([

        'name'     => 'Chris Sevilleja',
        'username' => 'sevilayha',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
    ]);
}

}
