<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Student_RoomChange_model;
use App\Models\girls_hostel;
use App\Models\boys_hostel;
$session = \Config\Services::session();

class Student_Room_change_request extends BaseController
{

public function index(){
    
    echo view("Student/Request/Room_change_request.php");
}

public function change(){
    $gender ="";
    $st_id="";
    $floor_no="";
    $room_no="";
    $user=$_SESSION["user_id"];

    $obj_girl= new girls_hostel(); 
    $obj_boy= new boys_hostel(); 

    foreach ($user as $d){

        $st_id=$d['student_id'];
        $gender=$d['gender'];
    }
    if($gender=="male"){
        $floor_all=$obj_boy->where('student_id',$st_id)->findAll();
        foreach($floor_all as $f){
            $floor_no=$f['floor'];
            $room_no=$f['room_no'];
        }

            $date = date('Y-m-d');
            $time = date('H:i:s');
            $sent = new Student_RoomChange_model();
        $data = [
            'student_id' => $st_id,
            'gender' => $gender,
            'room_no' => $room_no,
            'floor_no' => $floor_no,
            'reason' => $this->request->getPost('reason'),
            'date' => $date,
            'time' => $time,
          
        ];
        $sent->save($data);
        
       
        if($sent){
            echo '<script>alert("Request is sent");</script>';
        }
        else{
            echo '<script>alert("Request is not sent");</script>';
        }
        echo view("Student/Request/Room_change_request.php");



    }else{
        $floor_all=$obj_girl->where('student_id',$st_id)->findAll();
        foreach($floor_all as $f){
            $floor_no=$f['floor'];
            $room_no=$f['room_no'];
        }

            $date = date('Y-m-d');
            $time = date('H:i:s');
            $sent = new Student_RoomChange_model();
        $data = [
            'student_id' => $st_id,
            'gender' => $gender,
            'room_no' => $room_no,
            'floor_no' => $floor_no,
            'reason' => $this->request->getPost('reason'),
            'date' => $date,
            'time' => $time,
          
        ];
        $sent->save($data);
        
       
        if($sent){
            echo '<script>alert("Request is sent");</script>';
        }
        else{
            echo '<script>alert("Request is not sent");</script>';
        }
        echo view("Student/Request/Room_change_request.php");


       
    }
    // $date = date('Y-m-d');
    // $time = date('H:i:s');
    // $sent = new Student_RoomChange_model();
    //     $data = [
    //         'student_id' => $_SESSION["registation_no"],
    //         'reason' => $this->request->getPost('reason'),
    //         'date' => '2022-08-01',
    //         'time' => $time
          
    //     ];
    //     $sent->save($data);
        
       
    //     if($sent){
    //         echo '<script>alert("Message is send");</script>';
    //     }
    //     else{
    //         echo '<script>alert("Message is not send");</script>';
    //     }
    //     echo view("Student/Request/Room_change_request.php");
}
}