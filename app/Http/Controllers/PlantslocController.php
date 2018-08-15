<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plantsloc;
use Illuminate\Http\Request;

class PlantslocController extends Controller {

	public function index() {
		$plantsloc = Plantsloc::all();
		return response()->json($plantsloc);
		// return 'controller bisa';
	}

	public function detailPlantsloc($id) {
		$plantsloc = Plantsloc::find($id);
		return response()->json($plantsloc);
	}

	public function savePlantsloc(Request $request) {
		$plantsloc = Plantsloc::create($request->all());
		return response()->json($plantsloc);
	}

	public function deletePlantsloc($id) {
		$plantsloc = Plantsloc::find($id);
		$plantsloc->delete();
		return response()->json(array(
			'success' => true,
		));
	}

	public function updatePlantsloc(Request $request, $id) {
		$plantsloc = Plantsloc::find($id);
		$input = $request->all();
		$plantsloc->update($input);
		return response()->json($plantsloc);
	}

}