<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {

	public function index() {
		return view('customers.index');
	}

	public function create(){
		return view('customers.form');
	}

	public function edit($id){
		return view('customers.form',['id'=>$id]);
	}

	public function show(){
		$customer = Customer::orderBy('kode_customer')->get();
		return response()->json($customer);
	}

	public function detailCustomer($id) {
		$customer = Customer::find($id);
		return response()->json($customer);
	}

	public function saveCustomer(Request $request) {
		// $customer = Customer::create($request->all());
		// return response()->json($customer);

		return $request->data;
	}

	public function deleteCustomer($id) {
		$customer = Customer::find($id);
		$customer->delete();
		return response()->json(array(
			'success' => true,
		));
	}

	public function updateCustomer(Request $request, $id) {
		$customer = Customer::find($id);
		$input = $request->all();
		$customer->update($input);
		return response()->json($customer);
	}

}
