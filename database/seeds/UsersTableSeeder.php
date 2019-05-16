<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Let's truncate our existing records to start from scratch.
        User::truncate();

        User::create([
                'firstname' => 'Paul',
                'lastname' => 'test',
                'email'	 => 'kareem.ashraf.91@gmail.com',
                'status' => 1
            ]);
    }
}
