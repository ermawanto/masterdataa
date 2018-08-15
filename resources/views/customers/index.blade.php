@extends('_layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Customers</h1>
      </div>
      <div class="col-md-6 text-right">
        <a href="{{route('customers.create')}}" class="btn btn-success btn-md buat" >Buat</a>
      </div>
    </div>
    <hr class="dashed mb20 mt20">
    <br>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <table class="table table-bordered text-center">
          <thead >
            <tr>
              <th class="no">Id</th>
              <th>Kode Customer</th>
              <th>Nama Customer</th>
              <th>Nama Pimpinan</th>
              <th>Kode Propinsi</th>
              <th>Kode Kabupaten</th>
              <th>Sales Group</th>
              <th>No Telepon</th>
              <th>NPWP</th>
              <th>Email</th>
              <th>Active</th>
              <th class="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
