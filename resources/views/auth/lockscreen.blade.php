@extends('layout.auth')
@section('auth-form')

    <section id="wrapper">
    <div class="login-register" style="background-image:url(../img/lockscreen.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="index.html">
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <div class="user-thumb text-center">
                                <img alt="thumbnail" class="img-circle" width="100" src="" alt="User Avatar">
                                <h3>USERNAME</h3>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection