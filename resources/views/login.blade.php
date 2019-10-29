@extends('app')

@section('content')

    <div class="container">
        <form action="login" method="POST" role="form">
            <div class="form-login col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-push-4 col-sm-push-4 col-md-push-4 col-lg-push-4">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <h2>
                    <span class="glyphicon glyphicon-user"></span>
                    ĐĂNG NHẬP
                </h2>

                <div class="form-group">
                    <label style="color: #8c1515;">Tên tài khoản</label>
                    <input type="text" class="form-control" id="" name="mssv" placeholder="Tên đăng nhập">
                </div>

                <div class="form-group">
                    <label style="color: #8c1515;">Mật khẩu</label>
                    <input type="password" class="form-control" id="" name="password" placeholder="Mật khẩu">
                </div>

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif

                @if(session('res'))
                    <div class="alert alert-danger">
                        {{session('res')}}
                    </div>
                @endif

                <button type="submit" class="btn-login">Đăng nhập</button>

            </div>
        </form>
    </div>

@endsection