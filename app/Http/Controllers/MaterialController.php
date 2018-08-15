<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller {
	public function index(){
		return view('material.index');
	}

	public function show() {
		$material = Material::all();
		return response()->json($material);
	}

	public function detailMaterial($id) {
		$material = Material::find($id);
		return response()->json($material);
	}

	public function saveMaterial(Request $request) {
		$material = Material::create($request->all());
		return response()->json($material);
	}

	public function deleteMaterial($id) {
		$material = Material::find($id);
		$material->delete();
		return response()->json(array(
			'success' => true,
		));
	}

	public function updateMaterial(Request $request, $id) {
		$material = Material::find($id);
		$input = $request->all();
		$material->update($input);
		return response()->json($material);
	}

}
