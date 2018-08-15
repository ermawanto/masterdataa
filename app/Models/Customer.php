<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	protected $table = 'customer';
	protected $primaryKey = 'id';
	protected $fillable = array('id', 'kode_customer', 'nama_customer', 'nama_pimpinan', 'alamat', 'kode_propinsi', 'kode_kabupaten', 'sales_group', 'no_telepon', 'npwp', 'email', 'active');
}