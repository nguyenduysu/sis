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
        $this->call(InstitutesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(SubjectStudentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

class SubjectTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('subjects')->insert([
            // kì 1
			array('name' => 'Quản trị học đại cương', 'tc' => '2', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Tin học đại cương', 'tc' => '4', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Giải tích 1', 'tc' => '4', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Đại số', 'tc' => '4', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Vật lý 1', 'tc' => '3', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Những nguyên lý cơ bản chủ nghĩa Mac-Lenin', 'tc' => '2', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Tiếng anh B1.1', 'tc' => '3', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Quân sự chung - bắn súng AK', 'tc' => '2', 'semester' => '1', 'idInstitute' => '1'),
            array('name' => 'Giáo dục thể chất A', 'tc' => '2', 'semester' => '1', 'idInstitute' => '1'),

            // kì 2
             array('name' => 'Giải tích 2', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Giải tích 3', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Đường lối quân sự của Đảng', 'tc' => '2', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Xác xuất thống kê', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Vật lý 2', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Những nguyên lý cơ bản chủ nghĩa Mac-Lenin 2', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Tiếng anh B1.2', 'tc' => '3', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Quân sự chung - bắn súng AK', 'tc' => '2', 'semester' => '2', 'idInstitute' => '1'),
             array('name' => 'Giáo dục thể chất B', 'tc' => '2', 'semester' => '2', 'idInstitute' => '1'),

            // ki 3
             array('name' => 'Nhập môn công nghệ thông tin và truyền thông', 'tc' => '3', 'semester' => '3', 'idInstitute' => '1'),
             array('name' => 'Nhập môn java', 'tc' => '3', 'semester' => '3', 'idInstitute' => '1'),
             array('name' => 'Vật lý 3', 'tc' => '3', 'semester' => '3', 'idInstitute' => '1'),
             array('name' => 'Tư tưởng Hồ Chí Minh', 'tc' => '2', 'semester' => '3', 'idInstitute' => '1'),
             array('name' => 'Giáo dục thể chất C', 'tc' => '1', 'semester' => '3', 'idInstitute' => '1'),
             array('name' => 'Công tác quốc phòng an ninh', 'tc' => '2', 'semester' => '3', 'idInstitute' => '1'),

            // kì 4
             array('name' => 'Đường lối của Đảng cộng sản Việt Nam', 'tc' => '3', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Cấu trúc dữ liệu và giải thuật', 'tc' => '3', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Kiến trúc máy tính', 'tc' => '3', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Java nâng cao', 'tc' => '3', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Toán rời rạc', 'tc' => '3', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Kĩ thuật lập trình', 'tc' => '2', 'semester' => '4', 'idInstitute' => '1'),
             array('name' => 'Giáo dục thể chất D', 'tc' => '2', 'semester' => '4', 'idInstitute' => '1'),
                    
            // kì 5
             array('name' => 'Lập trình hướng đối tượng', 'tc' => '2', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Hệ điều hành', 'tc' => '3', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Linux và phần mềm mã nguồn mở', 'tc' => '2', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Mạng máy tính', 'tc' => '3', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Trí tuệ nhân tạo', 'tc' => '3', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Cơ sở dữ liệu', 'tc' => '3', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Pháp luật đại cương', 'tc' => '2', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Nhập môn công nghệ phần mềm', 'tc' => '2', 'semester' => '5', 'idInstitute' => '1'),
             array('name' => 'Giáo dục thể chất E', 'tc' => '1', 'semester' => '5', 'idInstitute' => '1'),

            // kì 6
             array('name' => 'Xử lý tín hiệu số', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'Lý thuyết thông tin', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'Phương pháp thiết kế hệ thống thông tin', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'Phương pháp thiết kế hệ thống thông tin', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'Lập trình mạng', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'An toàn và bảo mật thông tin', 'tc' => '3', 'semester' => '6', 'idInstitute' => '1'),
             array('name' => 'Thực tập kĩ thuật', 'tc' => '2', 'semester' => '6', 'idInstitute' => '1'),

            // kì 7
             array('name' => 'Project 1', 'tc' => '3', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'Ngôn ngữ và phương pháp dịch', 'tc' => '2', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'Thiết kế và quản trị cơ sở dữ liệu', 'tc' => '3', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'Đồ họa và hiện thực ảo', 'tc' => '3', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'An ninh mạng', 'tc' => '2', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'Lập trình thiết bị di động', 'tc' => '2', 'semester' => '7', 'idInstitute' => '1'),
             array('name' => 'Đa phương tiện', 'tc' => '2', 'semester' => '7', 'idInstitute' => '1'),

            // kì 8
             array('name' => 'Thiết kế và xây dựng phần mềm', 'tc' => '3', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Hệ phân tán', 'tc' => '2', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Tính toán khoa học', 'tc' => '3', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Quản trị mạng', 'tc' => '2', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Lập trình .Net', 'tc' => '2', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Lập trình song song', 'tc' => '2', 'semester' => '8', 'idInstitute' => '1'),
             array('name' => 'Project 2', 'tc' => '3', 'semester' => '8', 'idInstitute' => '1'),

            // kì 9
             array('name' => 'Tương tác người máy', 'tc' => '3', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Xử lý ảnh', 'tc' => '2', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Thiết kế mạng Intranet', 'tc' => '2', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Hệ trợ giúp quyết định', 'tc' => '2', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Quản trị dự án công nghệ thông tin', 'tc' => '2', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Phát triển phần mềm phân tán', 'tc' => '3', 'semester' => '9', 'idInstitute' => '1'),
             array('name' => 'Project 3', 'tc' => '3', 'semester' => '9', 'idInstitute' => '1')

            // kì 10
		]);
	}
}

class SubjectStudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('studentsubjects')->insert([
            // ki 1
            // array('idStudent' => '1', 'idSubject' => '1', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '2', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '3', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '4', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '5', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '6', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '7', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '8', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '9', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),

            // ki 2
            array('idStudent' => '1', 'idSubject' => '10', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '11', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '12', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '13', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '14', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '15', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '16', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '17', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '18', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),

            // ki 3
            array('idStudent' => '1', 'idSubject' => '19', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '20', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '21', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '22', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '23', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '24', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),

            // ki 4
            array('idStudent' => '1', 'idSubject' => '25', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '26', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '27', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '28', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '29', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '30', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '31', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            
            // ki 5
            array('idStudent' => '1', 'idSubject' => '32', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '33', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '34', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '35', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '36', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '37', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '38', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '39', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '40', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),

            // ki 6
            array('idStudent' => '1', 'idSubject' => '41', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '42', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '43', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '44', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '45', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '46', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '47', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            
            // ki 7
            array('idStudent' => '1', 'idSubject' => '48', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '49', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '50', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '51', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '52', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '53', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '54', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            
            // ki 8
            array('idStudent' => '1', 'idSubject' => '55', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '56', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '57', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '58', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '59', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '60', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '61', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            
            // ki 9
            array('idStudent' => '1', 'idSubject' => '62', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '63', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '64', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '65', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '66', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '67', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
            array('idStudent' => '1', 'idSubject' => '68', 'scoreMid' => '8', 'scoreFinal' => '8', 'status' => '1'),
        ]);
    }
}

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            array('name' => 'Nguyen Duy Su', 'mssv' => '20158342', 'DateOfBirth' => '0', 'class' => 'LTU14', 'course' => '60', 'idInstitute' => '1'),
            array('name' => 'Nguyen Van A', 'mssv' => '20161234', 'DateOfBirth' => '0', 'class' => 'LTU15', 'course' => '61', 'idInstitute' => '1'),
            array('name' => 'Tran Van B', 'mssv' => '20172122', 'DateOfBirth' => '0', 'class' => 'LTU16', 'course' => '62', 'idInstitute' => '1'),
            array('name' => 'Huynh Van C', 'mssv' => '20183254', 'DateOfBirth' => '0', 'class' => 'LTU17', 'course' => '63', 'idInstitute' => '1'),
            array('name' => 'Do Van D', 'mssv' => '20192121', 'DateOfBirth' => '0', 'class' => 'LTU18', 'course' => '64', 'idInstitute' => '1'),
        ]);
    }
}

class InstitutesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('institutes')->insert([
            array('name' => 'Viện công nghệ thông tin và truyền thông')
        ]);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            array('mssv' => '20158342', 'password' => bcrypt('20158342')),
            array('mssv' => '20161234', 'password' => bcrypt('20161234')),
            array('mssv' => '20172122', 'password' => bcrypt('20172122')),
            array('mssv' => '20183254', 'password' => bcrypt('20183254')),
            array('mssv' => '20192121', 'password' => bcrypt('20192121')),
        ]);
    }
}