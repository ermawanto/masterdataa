<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model {
	protected $table = 'material';
	protected $primaryKey = 'id';
	protected $fillable = array('id', 'produk_desc','material_code', 'code_jenis_produk', 'nama_jenis_produk', 'group_produk', 'group_produk_desc', 'active');
}