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

        foreach ($listSubjectFail as $key => $value) {
            array_unshift($listSubjectBySemester, $value);
        }

        return view('home', ['listSubject' => $listSubjectBySemester]);
    }
}
