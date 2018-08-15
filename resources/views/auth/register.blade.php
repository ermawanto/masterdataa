@extends('_layouts.basic')

@section('body')
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 batas-atas">
          <div class="account-wall">
            <h2 align="center">Sign Up</h2>
            <form class="form-signin" action="{{route('toRegister')}}" method="post">
              <input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">
                  Register
              </button>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection