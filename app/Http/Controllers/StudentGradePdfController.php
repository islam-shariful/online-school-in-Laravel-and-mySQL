<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class StudentGradePdfController extends Controller
{
    function markpdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_mark_data_to_html());
        //return $pdf->stream();
        return $pdf->download('marksheet.pdf');
    }
    function gradepdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_grade_data_to_html());
        //return $pdf->stream();
        return $pdf->download('gradesheet.pdf');
    }
    function get_grade_data()
    {
        $class = session('class');
        $section = session('section');
        $id = session('username');

        $grade = DB::table('result')
                        ->join('subject', 'result.subject_id', '=', 'subject.subject_id')
                        ->where('result.class_id', $class)
                        ->where('result.section_id', $section)
                        ->where('result.student_id', $id)
                        ->get();
        return $grade;
    }
    
    function convert_mark_data_to_html()
    {
        $grade_data = $this->get_grade_data();
        $output = '
        <h3 align="center">Final Gradesheet</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="16%">Subject</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Attendance</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Mid</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Final</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Total</th>    
        </tr>';  
        foreach($grade_data as $grade)
        {
            $total=$grade->midmarks+$grade->attendance+$grade->finalmarks;
            
        $output .= '<tr>
            <td style="border: 1px solid; padding:12px;">'.$grade->subjectname.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->attendance.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->midmarks.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->finalmarks.'</td>
            <td style="border: 1px solid; padding:12px;">'.$total.'</td>
            </tr>';
        }
        
        $output .= '</table>';
        return $output;
    }

    function convert_grade_data_to_html()
    {
        $grade_data = $this->get_grade_data();
        $output = '
        <h3 align="center">Final Gradesheet</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="16%">Subject</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Attendance</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Mid</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Final</th>
            <th style="border: 1px solid; padding:12px;" width="17%">Total</th>
            <th style="border: 1px solid; padding:12px;" width="16%">Grade</th>     
        </tr>';  
        foreach($grade_data as $grade)
        {
            $total=$grade->midmarks+$grade->attendance+$grade->finalmarks;
            if($total>159){
                $subjectgrade="A+";
            }
            elseif($total>139){
                $subjectgrade="A";
            }
            elseif($total>119){
                $subjectgrade="B+";
            }
            elseif($total>99){
                $subjectgrade="B";
            }
            elseif($total>79){
                $subjectgrade="C+";
            }
            elseif($total>59){
                $subjectgrade="C";
            }
            else{
                $subjectgrade="F";
            }
        $output .= '<tr>
            <td style="border: 1px solid; padding:12px;">'.$grade->subjectname.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->attendance.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->midmarks.'</td>
            <td style="border: 1px solid; padding:12px;">'.$grade->finalmarks.'</td>
            <td style="border: 1px solid; padding:12px;">'.$total.'</td>
            <td style="border: 1px solid; padding:12px;">'.$subjectgrade.'</td>
            </tr>';
        }
        
        $output .= '</table>';
        return $output;
    }

}
