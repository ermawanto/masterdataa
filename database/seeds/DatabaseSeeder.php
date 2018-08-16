<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call('UsersTableSeeder');
      $this->call('CustomersTableSeeder');
    	$this->call('PelangganTableSeeder');
    	$this->call('MaterialTableSeeder');
    	$this->call('PlantslocTableSeeder');
    	$this->call('WilayahTableSeeder');
    }
}
