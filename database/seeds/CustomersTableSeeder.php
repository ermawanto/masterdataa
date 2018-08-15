<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = DB::table('customer')->insert([             
        	[               
        	'nama_customer' => 'ABDI KARYA MANDIRI',               
        	'nama_pimpinan' => 'H. Taat Santoso, SH',
        	'alamat' => 'Jl. HOS Cokroaminoto No. 80',
        	'kode_propinsi' => '35',
        	'kode_kabupaten' => '3511',
        	'sales_group' => '374',
        	'no_telepon' => '332431871',
        	'npwp' => 'NULL',
        	'email' => 'h.taatsantoso@yahoo.co.id',
        	'active' => '1',                                         
        ],             
        	[               
        	'nama_customer' => 'ADI CANDRA SUMEKAR',               
        	'nama_pimpinan' => 'Moh. Parto, SSos.',
        	'alamat' => 'Gg. Randa Kuning I',
        	'kode_propinsi' => '35',
        	'kode_kabupaten' => '3529',
        	'sales_group' => '392',
        	'no_telepon' => '0328668514',
        	'npwp' => 'NULL',
        	'email' => 'han.adicandra@gmail.com',
        	'active' => '1',                                           
            ]         
        ]);
    }
}