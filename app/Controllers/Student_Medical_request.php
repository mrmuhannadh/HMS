<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Student_MedicalReq_model;
$session = \Config\Services::session();


class Student_Medical_request extends BaseController
{

public function index() {

    echo view("Student/Request/Medical_request.php");
}

public function medical(){
    $user=$_SESSION["user_id"];
                
    foreach ($user as $d){
        $_SESSION["stu_con"]=$d['contact_no'];
        $_SESSION["registation_no"]=$d['student_id'];
    }
    			
    $special = new Student_MedicalReq_model();
        $data = [
            'reg_no' => $_SESSION["registation_no"],
            'contact_no' => $_SESSION["stu_con"],
            'medical_issue' => $this->request->getPost('med_issue'),
            'takecareperson_name'=>$this->request->getPost('tcperson'),
            'takecareperson_tgno'=>$this->request->getPost('tgno'),
            'takecareperson_contactno'=>$this->request->getPost('contactno'),
            'leave_date' => date('Y-m-d'),
            'leave_time' =>date('H:i:s') 

        ];
        $send=$special->save($data);
        if($send==!NULL){
            echo '<script>alert("Request is sent");</script>';
        }
        else{
            echo '<script>alert("Request is not sent");</script>';
        }
        echo view("Student/Request/Medical_request.php");

}
}
