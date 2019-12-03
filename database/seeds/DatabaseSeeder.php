<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CTDTTableSeeder::class);
        $this->call(LoaiHPTableSeeder::class);
        $this->call(CTDT_LoaiHPTableSeeder::class);
        $this->call(MonHocTableSeeder::class);
        $this->call(SinhVienTableSeeder::class);
        $this->call(KetQuaHocTapTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}

class CTDTTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ctdt')->insert([
            array('ten' => 'Công nghệ thông tin - ĐH La Trobe (Úc)')
        ]);
    }
}

class LoaiHPTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loai_hp')->insert([
            array('ten' => 'Lý luận chính trị + Pháp luật đại cương', 'so_TC' => '12', 'Kieu_HP' => 'Chung'), // 1
            array('ten' => 'Giáo dục thể chất', 'so_TC' => '5', 'Kieu_HP' => 'Chung'),                        // 2
            array('ten' => 'Giáo dục Quốc phòng + An ninh', 'so_TC' => '0', 'Kieu_HP' => 'Chung'),             // 3
            array('ten' => 'Tiếng Anh', 'so_TC' => '6', 'Kieu_HP' => 'Chung'),                                // 4
            array('ten' => 'Khối kiến thức Toán và Khoa học cơ bản', 'so_TC' => '32', 'Kieu_HP' => 'Chung'),  // 5
            array('ten' => 'Cơ sở và cốt lõi ngành', 'so_TC' => '48', 'Kieu_HP' => 'Rieng'),                  // 6
            array('ten' => 'Kiến thức bổ trợ', 'so_TC' => '9', 'Kieu_HP' => 'Chung'),                         // 7
            array('ten' => 'Chuyên ngành bắt buộc', 'so_TC' => '9', 'Kieu_HP' => 'Rieng'),                    // 8
            array('ten' => 'Tự chọn', 'so_TC' => '16', 'Kieu_HP' => 'Rieng'),                                 // 9
            array('ten' => 'Thực tập kĩ thuật', 'so_TC' => '2', 'Kieu_HP' => 'Rieng'),                        // 10
            array('ten' => 'Đồ án tốt nghiệp kĩ sư', 'so_TC' => '12', 'Kieu_HP' => 'Rieng'),                  // 11

        ]);
    }
}

class CTDT_LoaiHPTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ctdt_loaihp')->insert([
//            array('CTDT_id' => '1', 'LoaiHP_id' => '1'),
//            array('CTDT_id' => '1', 'LoaiHP_id' => '2'),
//            array('CTDT_id' => '1', 'LoaiHP_id' => '3'),
//            array('CTDT_id' => '1', 'LoaiHP_id' => '4'),
//            array('CTDT_id' => '1', 'LoaiHP_id' => '5'),
            array('CTDT_id' => '1', 'LoaiHP_id' => '6'),
//            array('CTDT_id' => '1', 'LoaiHP_id' => '7'),
            array('CTDT_id' => '1', 'LoaiHP_id' => '8'),
            array('CTDT_id' => '1', 'LoaiHP_id' => '9'),
            array('CTDT_id' => '1', 'LoaiHP_id' => '10'),
            array('CTDT_id' => '1', 'LoaiHP_id' => '11'),

        ]);
    }
}

class MonHocTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('monhoc')->insert([
            // kì 1
			array('ten' => 'Quản trị học đại cương', 'tc' => '2', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '7'),
            array('ten' => 'Tin học đại cương', 'tc' => '4', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '5'),
            array('ten' => 'Giải tích 1', 'tc' => '4', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '5'),
            array('ten' => 'Đại số', 'tc' => '4', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '5'),
            array('ten' => 'Vật lý 1', 'tc' => '3', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '5'),
            array('ten' => 'Những nguyên lý cơ bản chủ nghĩa Mac-Lenin I', 'tc' => '2', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '1'),
            array('ten' => 'Tiếng anh B1.1', 'tc' => '3', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '4'),
            array('ten' => 'Quân sự chung - bắn súng AK', 'tc' => '0', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '3'),
            array('ten' => 'Giáo dục thể chất A', 'tc' => '1', 'ky_hoc_chuan' => '1', 'LoaiHP_id' => '2'),

            // kì 2
             array('ten' => 'Giải tích 2', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '5'),
             array('ten' => 'Giải tích 3', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '5'),
             array('ten' => 'Đường lối quân sự của Đảng', 'tc' => '0', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '3'),
             array('ten' => 'Xác xuất thống kê', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '5'),
             array('ten' => 'Vật lý 2', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '5'),
             array('ten' => 'Những nguyên lý cơ bản chủ nghĩa Mac-Lenin II', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '1'),
             array('ten' => 'Tiếng anh B1.2', 'tc' => '3', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '4'),
             array('ten' => 'Giáo dục thể chất B', 'tc' => '1', 'ky_hoc_chuan' => '2', 'LoaiHP_id' => '2'),

            // ki 3
             array('ten' => 'Nhập môn công nghệ thông tin và truyền thông', 'tc' => '3', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '6'),
             array('ten' => 'Nhập môn java', 'tc' => '3', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '6'),
             array('ten' => 'Vật lý 3', 'tc' => '3', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '5'),
             array('ten' => 'Tư tưởng Hồ Chí Minh', 'tc' => '2', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '1'),
             array('ten' => 'Giáo dục thể chất C', 'tc' => '1', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '2'),
             array('ten' => 'Công tác quốc phòng an ninh', 'tc' => '0', 'ky_hoc_chuan' => '3', 'LoaiHP_id' => '3'),

            // kì 4
             array('ten' => 'Đường lối Cách Mạng của Đảng cộng sản Việt Nam', 'tc' => '3', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '1'),
             array('ten' => 'Cấu trúc dữ liệu và giải thuật', 'tc' => '3', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '6'),
             array('ten' => 'Kiến trúc máy tính', 'tc' => '3', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '6'),
             array('ten' => 'Java nâng cao', 'tc' => '3', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '6'),
             array('ten' => 'Toán rời rạc', 'tc' => '3', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '6'),
             array('ten' => 'Kĩ thuật lập trình', 'tc' => '2', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '6'),
             array('ten' => 'Giáo dục thể chất D', 'tc' => '1', 'ky_hoc_chuan' => '4', 'LoaiHP_id' => '2'),

            // kì 5
             array('ten' => 'Lập trình hướng đối tượng', 'tc' => '2', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Hệ điều hành', 'tc' => '3', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Linux và phần mềm mã nguồn mở', 'tc' => '2', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Mạng máy tính', 'tc' => '3', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Trí tuệ nhân tạo', 'tc' => '3', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Cơ sở dữ liệu', 'tc' => '3', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Pháp luật đại cương', 'tc' => '2', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '1'),
             array('ten' => 'Nhập môn công nghệ phần mềm', 'tc' => '2', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '6'),
             array('ten' => 'Giáo dục thể chất E', 'tc' => '1', 'ky_hoc_chuan' => '5', 'LoaiHP_id' => '2'),

            // kì 6
             array('ten' => 'Xử lý tín hiệu số', 'tc' => '2', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '8'),
             array('ten' => 'Lý thuyết thông tin', 'tc' => '2', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '8'),
             array('ten' => 'Phân tích và thiết kế hệ thống thông tin', 'tc' => '2', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '6'),
             array('ten' => 'Lập trình mạng', 'tc' => '2', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '8'),
             array('ten' => 'An toàn và bảo mật thông tin', 'tc' => '3', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '6'),
             array('ten' => 'Thực tập kĩ thuật', 'tc' => '2', 'ky_hoc_chuan' => '6', 'LoaiHP_id' => '10'),

            // kì 7
             array('ten' => 'Project 1', 'tc' => '3', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '6'),
             array('ten' => 'Ngôn ngữ và phương pháp dịch', 'tc' => '2', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '8'),
             array('ten' => 'Thiết kế và quản trị cơ sở dữ liệu', 'tc' => '3', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '8'),
             array('ten' => 'Đồ họa và hiện thực ảo', 'tc' => '3', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '8'),
             array('ten' => 'An ninh mạng', 'tc' => '2', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '9'),
             array('ten' => 'Lập trình thiết bị di động', 'tc' => '2', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '9'),
             array('ten' => 'Đa phương tiện', 'tc' => '2', 'ky_hoc_chuan' => '7', 'LoaiHP_id' => '9'),

            // kì 8
             array('ten' => 'Thiết kế và xây dựng phần mềm', 'tc' => '3', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '9'),
             array('ten' => 'Hệ phân tán', 'tc' => '2', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '8'),
             array('ten' => 'Tính toán khoa học', 'tc' => '3', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '8'),
             array('ten' => 'Quản trị mạng', 'tc' => '2', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '9'),
             array('ten' => 'Lập trình .Net', 'tc' => '2', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '9'),
             array('ten' => 'Lập trình song song', 'tc' => '2', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '9'),
             array('ten' => 'Project 2', 'tc' => '3', 'ky_hoc_chuan' => '8', 'LoaiHP_id' => '6'),

            // kì 9
             array('ten' => 'Tương tác người máy', 'tc' => '3', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '8'),
             array('ten' => 'Xử lý ảnh', 'tc' => '2', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '9'),
             array('ten' => 'Thiết kế mạng Intranet', 'tc' => '2', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '8'),
             array('ten' => 'Hệ trợ giúp quyết định', 'tc' => '2', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '9'),
             array('ten' => 'Quản trị dự án công nghệ thông tin', 'tc' => '2', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '9'),
             array('ten' => 'Phát triển phần mềm phân tán', 'tc' => '3', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '9'),
             array('ten' => 'Project 3', 'tc' => '3', 'ky_hoc_chuan' => '9', 'LoaiHP_id' => '8'),

            // kì 10
            array('ten' => 'Hệ cơ sở dữ liệu đa phương tiện', 'tc' => '3', 'ky_hoc_chuan' => '10', 'LoaiHP_id' => '9'),
            array('ten' => 'Kinh tế công nghệ phần mềm', 'tc' => '2', 'ky_hoc_chuan' => '10', 'LoaiHP_id' => '9'),
            array('ten' => 'Đồ án tốt nghiệp kỹ sư', 'tc' => '12', 'ky_hoc_chuan' => '10', 'LoaiHP_id' => '11'),
        ]);
	}
}

class SinhVienTableSeeder extends Seeder
{
    public function run()
    {
        // trang_thai = 0: đang học tập
        // trang_thai = 1: đang bảo lưu
        // trang_thai = 2: buộc thôi học
        DB::table('sv')->insert([
            array('ten' => 'Nguyen Van A', 'mssv' => '20150001', 'CTDT_id' => '1', 'Muc_canh_cao' => '2', 'trang_thai' => '0'),
            array('ten' => 'Nguyen Van B', 'mssv' => '20150002', 'CTDT_id' => '1', 'Muc_canh_cao' => '0', 'trang_thai' => '0'),
            array('ten' => 'Nguyen Van C', 'mssv' => '20160001', 'CTDT_id' => '1', 'Muc_canh_cao' => '0', 'trang_thai' => '0'),
            array('ten' => 'Nguyen Van D', 'mssv' => '20170001', 'CTDT_id' => '1', 'Muc_canh_cao' => '0', 'trang_thai' => '0'),
            array('ten' => 'Nguyen Van E', 'mssv' => '20180001', 'CTDT_id' => '1', 'Muc_canh_cao' => '0', 'trang_thai' => '0'),
            array('ten' => 'Nguyen Van F', 'mssv' => '20190001', 'CTDT_id' => '1', 'Muc_canh_cao' => '0', 'trang_thai' => '0'),
        ]);
    }
}

class KetQuaHocTapTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('kq_ht')->insert([
            // trang_thai = 0 : mon hoc chua qua
            // trang_thai = 1: mon hoc da qua

            // ki 1
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '1', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '2', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '3', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '4', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '5', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '6', 'trang_thai' => '0'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '7', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '8', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '9', 'trang_thai' => '1'),

            // ki 2
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '10', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '11', 'trang_thai' => '1'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '1', 'MH_id' => '12', 'trang_thai' => '0'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '13', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '14', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '15', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '16', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '17', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '18', 'trang_thai' => '1'),

            // ki 3
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '19', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '20', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '21', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '22', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '23', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '24', 'trang_thai' => '1'),

            // kì 4
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '25', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '26', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '27', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '28', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '29', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '30', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '31', 'trang_thai' => '1'),

            // kì 5
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '32', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '33', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '34', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '35', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '36', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '37', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '38', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '39', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '40', 'trang_thai' => '1'),

            // kì 6
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '41', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '42', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '43', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '44', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '45', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '46', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '47', 'trang_thai' => '1'),

            // kì 7
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '48', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '49', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '50', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '51', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '52', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '53', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '54', 'trang_thai' => '1'),

            // kì 8
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '55', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '56', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '57', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '58', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '59', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '60', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '61', 'trang_thai' => '1'),

            // kì 9
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '62', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '63', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '64', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '65', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '66', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '1', 'MH_id' => '68', 'trang_thai' => '1'),

            // ki 1
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '1', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '2', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '3', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '4', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '5', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '6', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '7', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '8', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '9', 'trang_thai' => '1'),

            // ki 2
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '10', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '11', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '12', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '13', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '14', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '15', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '16', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '17', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '18', 'trang_thai' => '1'),

            // ki 3
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '19', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '20', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '21', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '22', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '23', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '24', 'trang_thai' => '1'),

            // kì 4
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '25', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '26', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '27', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '28', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '29', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '30', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '31', 'trang_thai' => '1'),

            // kì 5
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '32', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '33', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '34', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '35', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '36', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '37', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '38', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '39', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '40', 'trang_thai' => '1'),

            // kì 6
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '41', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '42', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '43', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '44', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '45', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '46', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '47', 'trang_thai' => '1'),

            // kì 7
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '48', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '49', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '50', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '51', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '52', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '53', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '54', 'trang_thai' => '1'),

            // kì 8
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '55', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '56', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '57', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '58', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '59', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '60', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '61', 'trang_thai' => '1'),

            // kì 9
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '62', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '63', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '64', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '65', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '66', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '2', 'MH_id' => '68', 'trang_thai' => '1'),

            // ki 1
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '1', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '2', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '3', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '4', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '5', 'trang_thai' => '1'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '3', 'MH_id' => '6', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '7', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '8', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '9', 'trang_thai' => '1'),

            // ki 2
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '10', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '11', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '12', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '13', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '14', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '15', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '16', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '17', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '18', 'trang_thai' => '1'),

            // ki 3
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '19', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '20', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '21', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '22', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '23', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '24', 'trang_thai' => '1'),

            // kì 4
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '25', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '26', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '27', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '28', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '29', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '30', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '31', 'trang_thai' => '1'),

            // kì 5
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '32', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '33', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '34', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '35', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '36', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '37', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '38', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '39', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '40', 'trang_thai' => '1'),

            // kì 6
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '41', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '42', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '43', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '44', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '45', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '46', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '47', 'trang_thai' => '1'),

            // kì 7
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '48', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '49', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '50', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '51', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '52', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '53', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '54', 'trang_thai' => '1'),

            // kì 8
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '55', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '56', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '57', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '58', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '59', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '60', 'trang_thai' => '1'),
//            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '3', 'MH_id' => '61', 'trang_thai' => '1'),

            // 2018
            // kì 1
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '5', 'MH_id' => '1', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '5', 'MH_id' => '2', 'trang_thai' => '0'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '3', 'trang_thai' => '1'),
//            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '5', 'MH_id' => '4', 'trang_thai' => '0'),
//            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '5', 'MH_id' => '5', 'trang_thai' => '0'),
            array('Diem_QT' => '2', 'Diem_CK' => '2', 'SV_id' => '5', 'MH_id' => '6', 'trang_thai' => '0'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '7', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '8', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '9', 'trang_thai' => '1'),

            // ki 2
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '10', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '11', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '12', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '13', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '14', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '15', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '16', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '17', 'trang_thai' => '1'),
            array('Diem_QT' => '8', 'Diem_CK' => '8', 'SV_id' => '5', 'MH_id' => '18', 'trang_thai' => '1'),
        ]);
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            array('username' => '20150001', 'password' => '$2y$10$W4PZt5vIE3ou9L4yKSF2WOHIKZUJURed5iDSli.TnRc9/MVx/MrhC'),
            array('username' => '20150002', 'password' => '$2y$10$EEsLal.EDVzY3NZqD2eu.OLH5/h8p7uTMZNbG2W8LNALNqUOJ42lm'),
            array('username' => '20160001', 'password' => '$2y$10$2TS9qc9jpcilCT4EoLPECeRVb0q9rz5V.eGwkUWjJMJKZpondgWB6'),
            array('username' => '20170001', 'password' => '$2y$10$JxIVvcl7.P.Mh1cqDW.rauQL0BjAIGjCwP6nuKrM560LAVBI/Ohue'),
            array('username' => '20180001', 'password' => '$2y$10$0vc6fIr65socsvSXM0LNLOCqpJP3Ph84iAsdTKtc6qqKJIUObDf8q'),
            array('username' => '20190001', 'password' => '$2y$10$JR6ODKKtvEM1YII4GBL1ueDBPsIRV4sQ8IT.dyyop7nhTt6kGthOW'),
        ]);
    }
}
