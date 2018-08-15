<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $material = DB::table('material')->insert([
        [               
        	'produk_desc' => 'Urea SUB @50 KG',               
        	'material_code' => '1000036',
        	'code_jenis_produk' => 'P01',
        	'nama_jenis_produk' => 'UREA',
        	'group_produk' => 'URESUB',
        	'group_produk_desc' => 'Urea Bersubsidi',
        	'active' => '1',                                         
        ],             
        	
        [               
        	'produk_desc' => 'NPK 15-15-15 SUB @50KG Agro
',               
        	'material_code' => '1000138',
        	'code_jenis_produk' => 'P02',
        	'nama_jenis_produk' => 'NPK',
        	'group_produk' => 'NPKSUB',
        	'group_produk_desc' => 'NPK Bersubsidi',
        	'active' => '1',                                           
        ],
            
        [               
        	'produk_desc' => 'NPK 15-15-15 SUB @50KG
',               
        	'material_code' => '1000147.',
        	'code_jenis_produk' => 'P02',
        	'nama_jenis_produk' => 'NPK',
        	'group_produk' => 'NPKSUB',
        	'group_produk_desc' => 'NPK Bersubsidi',
        	'active' => '1',                                           
        ],

        [               
        	'produk_desc' => 'Petroganik SUB @40 KG
',               
        	'material_code' => '1000361',
        	'code_jenis_produk' => 'P03',
        	'nama_jenis_produk' => 'ORGANIK',
        	'group_produk' => 'ORGSUB',
        	'group_produk_desc' => 'Organik Bersubsidi',
        	'active' => '1',                                           
        ],

        [               
        	'produk_desc' => 'Ze-organik SUB @40 KG
',               
        	'material_code' => '1000362',
        	'code_jenis_produk' => 'P03',
        	'nama_jenis_produk' => 'ORGANIK',
        	'group_produk' => 'ORGSUB',
        	'group_produk_desc' => 'Organik Bersubsidi',
        	'active' => '1',                                           
        ],

        [               
        	'produk_desc' => 'Ze-organik SUB @20 KG
',               
        	'material_code' => '1000363',
        	'code_jenis_produk' => 'P03',
        	'nama_jenis_produk' => 'ORGANIK',
        	'group_produk' => 'ORGSUB',
        	'group_produk_desc' => 'Organik Bersubsidi',
        	'active' => '1',                                           
        ],

        ]);
    }
}

