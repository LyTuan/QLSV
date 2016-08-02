<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lytuan_user')->insert([
    	['username' => 'superadmin', 'password' => bcrypt('12345')],	
    	['username' => 'admin','password' => bcrypt('12345')],
    	['username' =>'tuan','password' =>bcrypt('12345')]
	]);
    }
}
