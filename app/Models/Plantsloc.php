<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantsloc extends Model {
	protected $table = 'plantsloc';
	protected $primaryKey = 'id';
	protected $fillable = array('id', 'code_plant','nama_plant', 'code_storage_location', 'nama_storage_location', 'code_shipping_point', 'nama_shipping_point', 'code_propinsi');
}

