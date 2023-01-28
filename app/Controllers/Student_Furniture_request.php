<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Student_Furniture_model;
$session = \Config\Services::session();



class Student_Furniture_request extends BaseController
{





public function index() {

    echo view("Student/Request/Furniture.php");
}

public function furniture_req(){
    $user=$_SESSION["user_id"];
                
    foreach ($user as $d){
        $_SESSION["registation_no"]=$d['student_id'];
    }

    $special = new Student_Furniture_model();
        $data = [
          
            'student_id' =>  $_SESSION["registation_no"],
            // 'room_no' => $this->request->getPost('room_no'),
            'furniture_type' => $this->request->getPost('furniture_type'),
            'date' => date('Y-m-d'),
            'time' =>date('H:i:s') 
            // 'return_date' => $this->request->getPost('return_date'),
            // 'return_time' => $this->request->getPost('return_time'),
         
        ];
        if($special->save($data)){
        // return redirect()->to(base_url('Student/Request/Leave_request.php'))->with('status','Request Added sucessfully');
        echo '<script>alert("Request sent sucessfuly");</script>';
        echo view("Student/Request/Furniture.php");
    
        
        }
        else{
            echo '<script>alert("Request not sent");</script>';
        }
        

}
}