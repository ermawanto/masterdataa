@extends('_layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Material</h1>
      </div>
      <div class="col-md-6 text-right">
        <a href="#" class="btn btn-success btn-md buat" >Buat</a>
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
              <th>Produk Desc</th>
              <th>Material Code</th>
              <th>Code Jenis Produk</th>
              <th>Nama Jenis Produk</th>
              <th>Group Produk</th>
              <th>Group Produk Desc</th>
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

 