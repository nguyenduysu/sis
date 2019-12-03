@extends('app')

@section('content')
	<div class="home">
		<label for="">Gợi ý đăng ký học tập</label>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th class="bg">Tên học phần</th>
				<th class="bg">Số tín chỉ</th>
				<th class="bg">Học kỳ chuẩn</th>
			</tr>
			</thead>
			<tbody>
            <?php $i = 0; $j =0; $m = 0; $n = 0;?>
            @foreach($danhSachMonTruot as $subject)
                <tr class="fail">
                    <td>{{$subject->ten}}</td>
                    <td>{{$subject->tc}}</td>
                    <td>{{$subject->ky_hoc_chuan}}</td>
                </tr>
            @endforeach
            @foreach($danhSachMonHocCacKyTruocChuaHoc as $subject)
                <tr class="chuaHoc">
                    <td>{{$subject->ten}}</td>
                    <td>{{$subject->tc}}</td>
                    <td>{{$subject->ky_hoc_chuan}}</td>
                </tr>
            @endforeach
            @if( !$status )
                @foreach($danhSachMonTrongKyTiepTheoMaSinhVienChuaHoc as $subject)
                    <tr>
                        <td>{{$subject->ten}}</td>
                        <td>{{$subject->tc}}</td>
                        <td>{{$subject->ky_hoc_chuan}}</td>
                    </tr>
                @endforeach
                @foreach($danhSachMonTrongKyTiepTheoNua as $subject)
                    <tr class="next">
                        <td>{{$subject->ten}}</td>
                        <td>{{$subject->tc}}</td>
                        <td>{{$subject->ky_hoc_chuan}}</td>
                    </tr>
                @endforeach
            @endif
			</tbody>
		</table>
        <ul>
            <label >Lưu ý:</label>
            @if(Session::get('user')['Muc_canh_cao'] == 1 )
                <li class="note canhcao">Bạn đang bị cảnh cáo mức 1, do đó chỉ được đăng kí tối đa 18 tín chỉ</li>
            @elseif( Session::get('user')['Muc_canh_cao'] == 2)
                <li class="note canhcao">Bạn đang bị cảnh cáo mức 2, do đó chỉ được đăng kí tối đa 14 tín chỉ</li>
            @elseif( Session::get('user')['Muc_canh_cao'] == 3 )
                <li class="note canhcao">Bạn đang bị cảnh cáo mức 3 và đang được treo quyết định buộc thôi học, do đó chỉ được đăng kí tối đa 14 tín chỉ</li>
            @else
                <li class="note">Sinh viên chỉ được đăng kí tối đa 24 tín chỉ một kỳ</li>
                <li class="note">Sinh viên nên cân nhắc đăng kí những môn học chưa qua (Nếu có)</li>
            @endif
        </ul>
	</div>
@endsection
