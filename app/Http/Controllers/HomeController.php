<?php

namespace App\Http\Controllers;

use App\StudentSubject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() {
        $mssv      = trim(Auth::user()->mssv);
        $timeStudy = substr( $mssv,  0, 4);
        $timeNow   = Carbon::now('Asia/Ho_Chi_Minh');
        $yearNow   = $timeNow->year;
        $monthNow  = $timeNow->month;

        $kySV = ($yearNow - $timeStudy) * 2;

        if ($monthNow > 7) {
            $kySV += 1;
        }

        $listSubjectBySemester = DB::table('subjects')->where('semester', $kySV)->get()->toArray();

        $infoStudent = DB::table('students')->where('mssv', $mssv)->first();

        $listSubjectFail = DB::table('studentsubjects')
                               ->select('subjects.name', 'subjects.tc', 'subjects.semester', 'studentsubjects.status')
                               ->join('subjects', 'studentsubjects.idSubject', '=', 'subjects.id')
                               ->join('students', 'students.id', '=', 'studentsubjects.idStudent')
                               ->where('studentsubjects.status', StudentSubject::STATUS_FAIL)
                               ->where('studentsubjects.idStudent', $infoStudent->id)
                               ->get()
                               ->toArray();

        $totalTC = $this->getTotalTC($listSubjectBySemester);

        foreach ($listSubjectBySemester as $value) {
            $value->time_table = json_decode($value->time_table, true);
        }

        if (count($listSubjectFail) && $totalTC < 24) {
            foreach ($listSubjectFail as $key => $value) {
                array_unshift($listSubjectBySemester, $value);
            }
        } else if ($totalTC < 24) {
            $listSubjectNext = DB::table('subjects')->where('semester', ++$kySV)->get()->toArray();
            foreach ($listSubjectNext as $value) {
                $value->time_table = json_decode($value->time_table, true);
                $check = $this->checkSubjectToAdd($value, $listSubjectBySemester);
                if ($check) {
                    array_push($listSubjectBySemester, $value);
                }
            }

        }

        return view('home', ['listSubject' => $listSubjectBySemester]);
    }

    private function checkSubjectToAdd($subject, $listSubjectMain)
    {
        $keyAdd  = $subject->time_table['key'];
        $timeAdd = $subject->time_table['value'];

        $condition = 0;
        foreach ($listSubjectMain as $value) {
            $keyMain = $value->time_table['key'];
            if ($keyMain != $keyAdd) {
                continue;
            } else {
                $timeMain = $value->time_table['value'];

                foreach ($timeAdd as $value) {
                    if (in_array($value, $timeMain)) {
                       $condition++;
                    }
                }
            }
        }

        if ($condition) {
            return false;
        }

        return true;


    }


    private function getTotalTC($data)
    {
        $tc = 0;
        foreach ($data as $key => $value) {
            $tc += $value->tc;
        }

        return $tc;
    }


}
