<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function index() {
		$user = User::all();
		return response()->json($user);
		// return 'controller bisa';
	}

	public function detailUser($id) {
		$user = User::find($id);
		return response()->json($user);
	}

	public function saveUser(Request $request) {
		$user = User::create($request->all());
		return response()->json($user);
	}

	public function deleteUser($id) {
		$user = User::find($id);
		$user->delete();
		return response()->json(array(
			'success' => true,
		));
	}

	public function updateUser(Request $request, $id) {
		$user = User::find($id);
		$input = $request->all();
		$user->update($input);
		return response()->json($user);
	}

}