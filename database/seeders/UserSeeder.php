<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{

    //use Illuminate\Support\Facades\DB;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([

        	'role_id' => 1,

        	'name' => 'VICTOR',

        	'email' => 'admin@admin.com',

        	'username' => 'admin',

        	'password' => bcrypt('password'),


        ]);

          \DB::table('users')->insert([

            'role_id' => 2,

            'name' => 'dickson',

            'email' => 'agent@agent.com',

            'username' => 'agent',

            'password' => bcrypt('password'),


        ]);
    }
}
