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
				<th class="bg">Thời gian học</th>
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
						<td>
                            @if($subject->time_table['key'] == 0)
                                <b>Theo lịch giảng viên</b>
                            @else
                                <b>Thứ: </b>{{$subject->time_table['key']}}<br>
                                <?php $i = 1; ?>
                                <?php $j = 1; ?>
                                @foreach($subject->time_table['value'] as $value)
                                    @if($value <= 6)
                                        <?php $i++; ?>
                                        @if($i==2)<b>Sáng - Tiết:@endif </b>{{$value}}
                                    @else
                                         <?php $j++; ?>
                                         @if($j==2)<b>Chiểu - Tiết:@endif </b>{{$value - 6}}
                                    @endif
                                @endforeach
                            @endif
						</td>
					</tr>
				@endif

			@endforeach
			</tbody>
		</table>
	</div>
@endsection