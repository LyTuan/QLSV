<?php

use Illuminate\Database\Seeder;

class SinhVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('lytuan_sinhvien')->insert(
					[
						[
							'masv' => '14020002',
							'ten' => 'Trần Văn An',
							'lop' =>'QH-2014-I/CQ-C-B'
						],
						[
							'masv' => '14020003',
							'ten' => 'Hoàng Tuấn Anh',
							'lop' =>'QH-2014-I/CQ-C-A'
						],
						[
							'masv' => '13020521',
							'ten' => 'Nguyễn Duy Anh',
							'lop' =>'QH-2014-I/CQ-C-D'
						],
						[
							'masv' => '14020025',
							'ten' => 'Nguyễn Thanh Bình',
							'lop' =>'QH-2014-I/CQ-C-CLC'
						],
						[
							'masv' => '14020035',
							'ten' => 'Phạm Đức Chính',
							'lop' =>'QH-2014-I/CQ-C-B'
						],
						[
							'masv' => '15021377',
							'ten' => 'Đỗ Thành Công',
							'lop' =>'QH-2014-I/CQ-C-A'
						],
						[
							'masv' => '14020041',
							'ten' => 'Nguyễn Minh Công',
							'lop' =>'QH-2014-I/CQ-C-CLC'
						],
						[
							'masv' => '14020623',
							'ten' => 'Phạm Đức Dũng',
							'lop' =>'QH-2014-I/CQ-C-A'
						],
						[
							'masv' => '14020076',
							'ten' => 'Nguyễn Việt Dũng',
							'lop' =>'QH-2014-I/CQ-C-D'
						],
						[
							'masv' => '13020712',
							'ten' => 'Lý Văn Dy',
							'lop' =>'QH-2014-I/CQ-C-B'
						],
						[
							'masv' => '13020716',
							'ten' => 'Hoàng Tiến Đạt',
							'lop' =>'QH-2014-I/CQ-C-B'
						],
						[
							'masv' => '15022844',
							'ten' => 'Nguyễn Anh Đạt',
							'lop' =>'QH-2014-I/CQ-C-CLC'
						],
						[
							'masv' => '15021523',
							'ten' => 'Nguyễn Tiến Đạt',
							'lop' =>'QH-2014-I/CQ-C-D'
						],
						[
							'masv' => '15022247',
							'ten' => 'Nguyễn Vũ Đức',
							'lop' =>'QH-2014-I/CQ-C-C'
						],
						[
							'14020126' => '14020041',
							'ten' => 'Phan Bá Giang',
							'lop' =>'QH-2014-I/CQ-C-C'
						],
						[
							'masv' => '12020109',
							'ten' => 'Nguyễn Tiến Giáp',
							'lop' =>'QH-2014-I/CQ-C-C'
						],

					]
				);
    }
}
