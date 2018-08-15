<?php

use Illuminate\Database\Seeder;

class PlantslocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $plantsloc = DB::table('plantsloc')->insert([
        [               
        	'code_plant' => 'D101',
        	'nama_plant' => 'GD LINI 1 SAR BONTANG',              
        	'code_storage_location' => '2N01',
        	'nama_storage_location' => 'PEL UREA CURAH',
        	'code_storage_location' => 'D100',
        	'nama_shipping_point' => 'PEL UREA CURAH',
        	'code_propinsi' => '64'
                                           
        ],

        [               
        	'code_plant' => 'D101',
        	'nama_plant' => 'GD LINI 1 SAR BONTANG',              
        	'code_storage_location' => '2N02',
        	'nama_storage_location' => 'PEL AMONIA',
        	'code_storage_location' => 'D101',
        	'nama_shipping_point' => 'PEL AMONIA',
        	'code_propinsi' => '64'        
        ],

        ]);            
    }
}

