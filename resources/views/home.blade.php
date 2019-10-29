@extends('app')

@section('content')
	<div class="home">
		<label for="">Gợi ý đăng ký học tập</label>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th class="bg">Tên học phần</th>
				<th class="bg">Số tín chỉ</th>
				<th class="bg">Học kỳ</th>
			</tr>
			</thead>
			<tbody>
			@foreach($listSubject as $subject)
				@if(isset($subject->status))
					<tr class="fail">
						<td>{{$subject->name}}</td>
						<td>{{$subject->tc}}</td>
						<td>{{$subject->semester}}</td>
					</tr>
				@else
					<tr>
						<td>{{$subject->name}}</td>
						<td>{{$subject->tc}}</td>
						<td>{{$subject->semester}}</td>
					</tr>
				@endif

			@endforeach
			</tbody>
		</table>
	</div>
@endsection