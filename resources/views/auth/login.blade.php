@extends('_layouts.basic')

@section('body')
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4" style="margin-top:150px">
          <div class="account-wall">
            <h2 align="center">Sign In</h2>
            <form class="form-signin" action="{{route('toLogin')}}" method="post">
              <input type="text" name="username" class="form-control" placeholder="Nama" required autofocus>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">
                  Login
              </button>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
