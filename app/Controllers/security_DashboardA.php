<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\model_users;
use App\Models\security_model;
use App\Models\entry_leave_Model;
class security_DashboardA extends BaseController
{    
    public function log_index(){
        echo view("Security/dashboard/Log.php");
    }
    

    public function log_atte(){
        $session=session();
        $obj_attendance= new entry_leave_Model();
        $res2=$obj_attendance->where('student_id',"tg000")->orderBy('no', 'desc')->first();
        $_SESSION["time"]=$res2;


        $obj_student= new student_model();
        $res=$obj_student->where('student_id',"tg000")->findAll();
        $_SESSION["att_student"]=$res;        
        echo view("Security/dashboard/Log.php");
        return redirect('log_index');
    }


    // Attendance index
    public function log_A(){
        $obj_student= new student_model();
            $obj_attendance= new entry_leave_Model();
            $session=session();
        if($this->request->getMethod()=="post"){
            
            
            if(($_POST['text']==null)){
                echo '<script>alert("please scan QR code ");</script>';
                echo view('Security/dashboard/Log.php');
            }else{
                $_SESSION['text']=$_POST['text'];
                $res=$obj_student->where('student_id',$_POST['text'])->findAll();
                    if($res==NULL){
                        echo '<script>alert("Scan the valid QR code or enter the valued TG number");</script>';
                        echo view('Security/dashboard/Log.php');
                    }else{
                        $_SESSION["at_st_details"]=$res;
                        $res2=$obj_attendance->where('student_id',$_POST['text'])->orderBy('no', 'desc')->limit(1)->find();
                        $_SESSION["att_student"]=$res2;
                        echo view('Security/dashboard/Log.php');
                    }
                }
    }
    else{
        $res=$obj_student->where('student_id',$_SESSION['text'])->findAll();
        $_SESSION["at_st_details"]=$res;
        $res2=$obj_attendance->where('student_id',$_SESSION['text'])->orderBy('no', 'desc')->limit(1)->find();
        $_SESSION["att_student"]=$res2;
        echo view('Security/dashboard/Log.php');
    }
    }




    public function log_AAA(){
        
//        $obj_attendance= new demo();

        // current date
        date_default_timezone_set('Asia/Colombo');
           $date = date("Y-m-d");
           $time = date("H:i:s");


           $session=session();
            $at_st_details=$_SESSION["at_st_details"];
            $st_att=$_SESSION["att_student"];
            $student;

            foreach($at_st_details as $a){
                $student=$a['student_id'];
            }
            // create modes for student and attendance
            $obj_student= new student_model();
            $obj_attendance= new entry_leave_Model();
//         // code here to get last TimeIn and last TimeOut
            $res2=$obj_attendance->where('student_id',$student)->orderBy('no', 'desc')->limit(1)->find();
     if($this->request->getMethod()=="post"){
           
    //         // if the new to the attendance
            if($res2==NULL){
               
                 $data = [
                    'student_ID' => $student,
                    'enter_date'  => $date,
                    'enter_time' => $time,
                        ];
            
            $obj_attendance->insert($data);    
            
            $res2=$obj_attendance->where('student_id',$student)->orderBy('no', 'desc')->limit(1)->find();
            $_SESSION["att_student"]=$res2;
            echo '<script>alert("New Record Added");</script>';
            return redirect('logA');
         }else{
            

           
    //     //check last attertence
       
             foreach($res2 as $re){
                $student_id=$re['student_ID'];
                $enter_date= $re["enter_date"];
                $enter_time=$re["enter_time"];
                $exit_date=$re['exit_date'];
                $exit_time=$re['exit_time'];
                $no=$re['no'];
            }
           
             
    //     // check student is already TimeiN
        if($exit_date=="0000-00-00"){
    //     //update with current time in out
            $data = [
                    'student_ID' => $student,
                    'enter_date' => $enter_date,
                    'enter_time' => $enter_time,
                    'exit_date' => $date,
                    'exit_time' => $time,
                    
             ];
        
             $obj_attendance->update($no, $data);
             echo '<script>alert("Update Record Added");</script>';
             return redirect('logA');
             
       }
        else{
    //     // insert data
    
             $data = [
                'student_ID' => $student,
                'enter_date'    => $date,
                'enter_time' => $time,
                
        ];
            $obj_attendance->insert($data);
            echo '<script>alert("New Record Added");</script>';
           echo view('Security/dashboard/Log.php');
           return redirect('logA');
        }


  

}
    
}
    
    
     
     }

     
}