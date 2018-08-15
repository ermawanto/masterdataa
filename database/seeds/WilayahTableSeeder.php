<?php

use Illuminate\Database\Seeder;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wilayah = DB::table('wilayah')->insert([
        [               
        	'sales_office' => '35',
        	'sales_office_desc' => 'JAWA TIMUR',
        	'code_kabupaten' => '3501',              
        	'kabupaten' => 'KAB.PACITAN',
        	'sales_group' => '364',
        	'code_kecamatan' => '350101',
        	'kecamatan' => 'Donorojo',
                                           
        ],

        [               
        	'sales_office' => '35',
        	'sales_office_desc' => 'JAWA TIMUR',
        	'code_kabupaten' => '3501',              
        	'kabupaten' => 'KAB.PACITAN',
        	'sales_group' => '364',
        	'code_kecamatan' => '350102',
        	'kecamatan' => 'Pringkuku',        
        ],

        ]);  
    }
}


