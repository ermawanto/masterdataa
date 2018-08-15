<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model {
	protected $table = 'wilayah';
	protected $primaryKey = 'id';
	protected $fillable = array('id', 'sales_office','sales_office_desc', 'code_kabupaten', 'kabupaten', 'sales_group', 'code_kecamatan', 'kecamatan');
}

