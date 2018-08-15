@extends('_layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Form Customers</h1>
      </div>
      <div class="col-md-6 text-right">
        <a href="{{route('customers.index')}}" class="btn btn-success btn-md buat">Kembali</a>
      </div>
    </div>
    <hr class="dashed mb20 mt20">
    <br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form action="#" method="post">
          <input type="hidden" name="_method" value="#">
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="nama">Nama Sekolah</label>
                <input type="text" name="nama" id="nama" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1 col-md-offset-9">
              <button type="submit" class="btn btn-md btn-success">Oke</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
