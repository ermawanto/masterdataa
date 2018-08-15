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
        $user = DB::table('users')->insert([             
        	[               
        	'username' => 'Andrea Tyus E',                              
        	'password' =>app('hash')->make('ermawanto'),               
        	],             
        	[               
        		'username' => 'Elviera Tanjung',                              
        		'password'=> app('hash')->make('tanjungperak'),               
        	]         
        	]);
    }
}
