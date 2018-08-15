<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller {

	public function index(){
		return view('wilayah.index');
	}

	public function show() {
		$wilayah = Wilayah::all();
		return response()->json($wilayah);
		// return 'controller bisa';
	}

	public function detailWilayah($id) {
		$wilayah = Wilayah::find($id);
		return response()->json($wilayah);
	}

	public function saveWilayah(Request $request) {
		$wilayah = Wilayah::create($request->all());
		return response()->json($wilayah);
	}

	public function deleteWilayah($id) {
		$wilayah = Wilayah::find($id);
		$wilayah->delete();
		return response()->json(array(
			'success' => true,
		));
	}

	public function updateWilayah(Request $request, $id) {
		$wilayah = Wilayah::find($id);
		$input = $request->all();
		$wilayah->update($input);
		return response()->json($wilayah);
	}

}
