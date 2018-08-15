<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->double('kode_customer');
            $table->string('nama_customer');
            $table->string('nama_pimpinan'); 
            $table->string('alamat');
            $table->string('kode_propinsi');
            $table->string('kode_kabupaten');
            $table->double('sales_group');
            $table->double('no_telepon');
            $table->string('npwp');
            $table->string('email');
            $table->double('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
