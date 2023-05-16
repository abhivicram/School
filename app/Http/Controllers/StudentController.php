<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = DB::table('tbl__students')
                        ->select('tbl__students.Name','tbl__parents.Name as tbl__parents_Name','tbl__courses.Course_Name as tbl__courses_Course__Name')
                        ->join('tbl__parents','tbl__students.Fk_Parent_id','=','tbl__parents.id')
                        ->join('tbl_student_opted_courses','tbl__students.id','=','tbl_student_opted_courses.Student_Id')
                        ->join('tbl__courses','tbl_student_opted_courses.Course_id','=','tbl__courses.id')
        ->get();

        $data['student'] = $student;
        return view('student',$data);
        //return $student;

        
    }

    // public function changeStudentStatus(Request $request)
    // {
    //     $student = 
    // }
}
