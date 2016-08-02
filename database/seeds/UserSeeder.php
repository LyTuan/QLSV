<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lytuan_sinhvien')->insert(
				[
						[
			            'username' => 'superadmin1',
			            'password' => bcrypt('12345'),
			            'created_at' => new DateTime()
			        ],[
			            'username' => 'admin',
			            'password' => bcrypt('12345'),
			            'created_at' => new DateTime()
			        ],[
			            'username' => 'member',
			            'password' => bcrypt('12345'),
			            'created_at' => new DateTime()
			        ]
			    ]
			);

    }
}
