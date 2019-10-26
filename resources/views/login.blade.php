@extends('app')

@section('content')
	@if(count($errors) > 0)
		@foreach ($errors->all() as $error)
			<ul>
				<li style="list-style-type: none;">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 alert alert-danger text-center" style="margin-bottom: 0;">
							{!! $error !!}
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
					</div>	
				</li>
			</ul>
			
		@endforeach
	@endif
	<!-- @if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{!! $error !!}</li>
			@endforeach
		</ul>
	@endif -->
	<form action="{!! route('login') !!}" method="POST" role="form">
		{{csrf_field()}}
		<!-- <input type="hidden" name="_token" value="{!! csrf_field() !!}"> -->
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-push-4 col-sm-push-4 col-md-push-4 col-lg-push-4">
			<legend>Đăng nhập</legend>
			<div class="form-group">
				<label for="">Tên tài khoản</label>
				<input type="text" class="form-control" id="" name="username" placeholder="Tên đăng nhập">
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="text" class="form-control" id="" name="password" placeholder="Mật khẩu">
			</div>
			<button type="submit" class="btn btn-primary form-control">Đăng nhập</button>
		</div>
	</form>
@endsection