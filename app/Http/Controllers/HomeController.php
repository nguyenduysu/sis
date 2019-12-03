<?php

namespace App\Http\Controllers;

use App\SinhVien;
use App\StudentSubject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() {
        $mssv      = trim(Auth::user()->username);
        $timeStudy = substr( $mssv,  0, 4);
        $timeNow   = Carbon::now('Asia/Ho_Chi_Minh');
        $yearNow   = $timeNow->year;
        $monthNow  = $timeNow->month;

        $kySV = ($yearNow - $timeStudy) * 2;
        if ($monthNow > 7) {
            $kySV += 1;
        }
        $kyTiepTheo = $kySV + 1;

        // lấy thông tin sinh viên vừa đăng nhập
        $sinhvien = SinhVien::select('id', 'ten','mssv', 'CTDT_id', 'Muc_canh_cao')
                        ->where('mssv', $mssv)->first()->toArray();

        // Lấy danh sách môn học trong CTĐT Ứng với kỳ tiếp theo của sinh viên
        $danhSachMonHocTrongCTDTUngVoiKyTiepTheo = $this->getDanhSachMonHocTrongCTDTCuaSinhVienTrongMotKyHoc($sinhvien['CTDT_id'], $kyTiepTheo);

        $monHocDaHoc = DB::table('kq_ht')
            ->select('MH_id')
            ->where('SV_id', '=', $sinhvien['id'])
            ->get()->toArray();
        // check những môn học nào trong kỳ tiếp theo mà sinh viên chưa học
        $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc = $this->checkMonHocDaHoc($monHocDaHoc, $danhSachMonHocTrongCTDTUngVoiKyTiepTheo);

        $danhSachKySau = $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc;

        $soLuongMonTrongKyTiepTheoMaSinhVienChuaHoc = count($danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc);

        // get Subject Fail
        $danhSachMonHocTruot = DB::table('monhoc')
                ->select('monhoc.id', 'monhoc.ten', 'monhoc.ky_hoc_chuan', 'monhoc.tc')
                ->join('kq_ht', 'monhoc.id', '=','kq_ht.MH_id')
                ->where('kq_ht.SV_id','=', $sinhvien['id'])
                ->where('kq_ht.trang_thai', '=', 0)
                ->get()->toArray();
        // xử lý cảnh cáo
        $tongTCTruot = $this->getTotalTC($danhSachMonHocTruot);

        if($sinhvien['Muc_canh_cao'] == 1) {
            if($tongTCTruot > 18) {
                $danhSachMonHocGoiY = $danhSachMonHocTruot;
            } else {
                foreach ($danhSachMonHocTruot as $monHocTruot) {
                    array_unshift($danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc, $danhSachMonHocTruot);
                }
                $danhSachMonHocGoiY = $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc;
            }
        } elseif ($sinhvien['Muc_canh_cao'] == 2) {
            if($tongTCTruot > 14) {
                $danhSachMonHocGoiY = $danhSachMonHocTruot;
            } else {
                foreach ($danhSachMonHocTruot as $monHocTruot) {
                    array_unshift($danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc, $danhSachMonHocTruot);
                }
                $danhSachMonHocGoiY = $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc;
            }
        } elseif ($sinhvien['Muc_canh_cao'] == 3 && $sinhvien['trang_thai'] == 0) {
            if($tongTCTruot > 14) {
                $danhSachMonHocGoiY = $danhSachMonHocTruot;
            } else {
                foreach ($danhSachMonHocTruot as $monHocTruot) {
                    array_unshift($danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc, $danhSachMonHocTruot);
                }
                $danhSachMonHocGoiY = $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc;
            }
        } else {
            foreach ($danhSachMonHocTruot as $monHocTruot) {
                array_unshift($danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc, $monHocTruot);
            }
            $danhSachMonHocGoiY = $danhSachMonHocTrongCTDTUngVoiKyTiepTheoMaSinhVienChuaHoc;
        }
        $soMonGoiYTrongKyTiepTheo = count($danhSachMonHocGoiY);

        // xử lý những môn học trong các học kỳ trước, mà sinh viên chưa đăng ký học
        $danhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc = $this->getDanhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc($sinhvien['CTDT_id'], $kySV);

        $danhsachMonHocTrongCacKyHocTruocMaSinhVienChuaHoc = $this->checkMonHocTrongCacKyTruocMaSinhVienChuaHoc($danhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc, $monHocDaHoc);
        foreach ($danhsachMonHocTrongCacKyHocTruocMaSinhVienChuaHoc as $monHoc) {
            array_unshift($danhSachMonHocGoiY, $monHoc);
        }

        $danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua = array();
        // xử lý nếu sinh viên không trượt môn nào thì gợi ý các môn học trong 2 kì tiếp theo
        if(empty($danhSachMonHocTruot)) {
            $danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua = $this->getDanhSachMonHocTrongCTDTCuaSinhVienTrongMotKyHoc($sinhvien['CTDT_id'], $kyTiepTheo + 1);
            $soLuongMonTrongKyTiepTheoNua = count($danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua);
            foreach ($danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua as $monHoc) {
                array_push($danhSachMonHocGoiY, $monHoc);
            }
        }

        $status = false;
        if($sinhvien['Muc_canh_cao'] == 1) {
            if($tongTCTruot > 18) {
                $status = true;
            }
        } elseif ($sinhvien['Muc_canh_cao'] == 2) {
            if($tongTCTruot > 14) {
                $status = true;

            }
        } elseif ($sinhvien['Muc_canh_cao'] == 3 && $sinhvien['trang_thai'] == 0) {
            if($tongTCTruot > 14) {
                $status = true;
            }
        }

//        dd(count($danhsachMonHocTrongCacKyHocTruocMaSinhVienChuaHoc));
//        dd(count($danhSachMonHocTruot));
//        dd($soLuongMonTrongKyTiepTheoMaSinhVienChuaHoc);
//        dd($soLuongMonTrongKyTiepTheoNua);
//        dd($danhsachMonHocTrongCacKyHocTruocMaSinhVienChuaHoc);
//        dd($danhSachMonHocTruot);
//        dd($danhSachKySau);
//        dd($danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua);

//        dd($danhSachMonHocGoiY);

        $data = array(
            'listSubject' => $danhSachMonHocGoiY,
            'status' => $status,
            'danhSachMonHocCacKyTruocChuaHoc' => $danhsachMonHocTrongCacKyHocTruocMaSinhVienChuaHoc,
            'danhSachMonTruot' => $danhSachMonHocTruot,
            'danhSachMonTrongKyTiepTheoMaSinhVienChuaHoc' => $danhSachKySau,
            'danhSachMonTrongKyTiepTheoNua' => $danhSachMonHocTrongCTDTUngVoiKyTiepTheoNua,
        );

        return view('home', $data);
    }

    private function checkMonHocTrongCacKyTruocMaSinhVienChuaHoc($danhSachMonHocCacKyTruoc, $danhSachMonHocDaHoc)
    {
        foreach ($danhSachMonHocCacKyTruoc as $key => $monHoc) {
            foreach ($danhSachMonHocDaHoc as $daHoc) {
                if($monHoc->id == $daHoc->MH_id) {
                    unset($danhSachMonHocCacKyTruoc[$key]);
                    break;
                }
            }
        }
        return $danhSachMonHocCacKyTruoc;
    }

    private function getDanhSachLoaiHPTrongCTDTCuaSinhVien($CTDT_id) {
        $danhSachLoaiHP = array();
        // get Subject from LoaiHP Chung and monhoc.ky_hoc_chuan = $kyTiepTheo
        $danhSachLoaiHPChung = DB::table('loai_hp')
            ->select('loai_hp.id', 'loai_hp.ten', 'loai_hp.so_TC')
            ->where('loai_hp.Kieu_HP', '=', 'Chung')
            ->get()->toArray();
        foreach ($danhSachLoaiHPChung as $LoaiHP) {
            array_push($danhSachLoaiHP, $LoaiHP);
        }

        // get Subject from LoaiHP Rieng and monhoc.ky_hoc_chuan = $kyTiepTheo
        $danhSachLoaiHPRieng = DB::table('loai_hp')
            ->select('loai_hp.id', 'loai_hp.ten', 'loai_hp.so_TC')
            ->join('ctdt_loaihp', 'loai_hp.id', '=','ctdt_loaihp.LoaiHP_id')
            ->where('ctdt_loaihp.CTDT_id', '=',$CTDT_id)
            ->get()->toArray();
        foreach ($danhSachLoaiHPRieng as $LoaiHP) {
            array_push($danhSachLoaiHP, $LoaiHP);
        }
        return $danhSachLoaiHP;
    }

    private function getDanhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc($CTDT_id, $ky_hoc_hien_tai)
    {
        $danhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc = array();
        $danhSachLoaiHP = $this->getDanhSachLoaiHPTrongCTDTCuaSinhVien($CTDT_id);

        foreach ($danhSachLoaiHP as $LoaiHP) {
            $danhSachMonHoc = DB::table('monhoc')
                ->select('id', 'ten', 'tc', 'ky_hoc_chuan', 'LoaiHP_id')
                ->where([
                    ['LoaiHP_id', '=', $LoaiHP->id],
                    ['ky_hoc_chuan', '<', $ky_hoc_hien_tai]
                ])->get()->toArray();
            if($danhSachMonHoc) {
                foreach ($danhSachMonHoc as $monHoc) {
                    array_push($danhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc, $monHoc);
                }
            }
        }
        return $danhSachMonHocTrongCTDTCuaSinhVienTrongCacKyHocTruoc;
    }

    private function getDanhSachMonHocTrongCTDTCuaSinhVienTrongMotKyHoc($CTDT_id,$ky_hoc_tiep_theo)
    {
        $danhSachMonHocTrongCTDTUngVoiKyTiepTheo = array();
        $danhSachLoaiHP = $this->getDanhSachLoaiHPTrongCTDTCuaSinhVien($CTDT_id);

        foreach ($danhSachLoaiHP as $LoaiHP) {
            $danhSachMonHoc = DB::table('monhoc')
                ->select('id', 'ten', 'tc', 'ky_hoc_chuan', 'LoaiHP_id')
                ->where([
                    ['LoaiHP_id', '=', $LoaiHP->id],
                    ['ky_hoc_chuan', '=', $ky_hoc_tiep_theo]
                ])->get()->toArray();
            if($danhSachMonHoc) {
                foreach ($danhSachMonHoc as $monHoc) {
                    array_push($danhSachMonHocTrongCTDTUngVoiKyTiepTheo, $monHoc);
                }
            }
        }
        return $danhSachMonHocTrongCTDTUngVoiKyTiepTheo;
    }

    private function getTotalTC($data)
    {
        $tc = 0;
        foreach ($data as $key => $value) {
            $tc += $value->tc;
        }
        return $tc;
    }

    private function checkMonHocDaHoc($monHocDaHoc, $monHocTrongKyTiepTheo)
    {
//        dd($monHocTrongKyTiepTheo);
        foreach ($monHocTrongKyTiepTheo as $key => $monHoc) {
            foreach ($monHocDaHoc as $daHoc) {
                if($monHoc->id == $daHoc->MH_id) {
                    unset($monHocTrongKyTiepTheo[$key]);
                }
            }
        }
        return $monHocTrongKyTiepTheo;
    }
}
