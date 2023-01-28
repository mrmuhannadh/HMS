<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_complaints;
class Warden_Complaints extends BaseController
{
    public function index()
    {
        echo view('Warden/Complaints/complaints.php');
        
    }
    public function getComplaints()
    {
        $output="";
        $obj_complaint = new model_complaints();
        $receiver=$this->request->getVar('id');
        
        foreach(($result=$obj_complaint->where('receiver',$receiver)->findAll()) as $row){
            $output .='
                <tr>
                    <th scope="row">'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['subject'].'</td>
                    <td>'.$row['complaint'].'</td>
                </tr>
            ';  
        }
        return $output;
    }  
    public function getMyComplaints()
    {
        $output="";
        $obj_complaint = new model_complaints();
        $receiver=$this->request->getVar('id');

        foreach(($result=$obj_complaint->where('sender',$receiver)->findAll()) as $row){
            $output .='
                <tr>
                    <th scope="row">'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['subject'].'</td>
                    <td>'.$row['complaint'].'</td>
                </tr>
            ';  
        }
        
        return $output;
    } 
    public function sendComp(){
        $obj_complaint = new model_complaints();
        $receiver=$this->request->getVar('receiver');
        $complaint=$this->request->getVar('comp');
        $sender=$this->request->getVar('sender');
        $subject=$this->request->getVar('subject');
        $date=date('Y-m-d');
        $time=date('H:i:s');

        $data=array(
            'receiver'=>$receiver,
            'sender'=>$sender,
            'date'=>$date,
            'time'=>$time,
            'subject'=>$subject,
            'complaint'=>$complaint
        );
        $re=$obj_complaint->save($data);
        if($re){
            return("Complaint sent");
        }else{
            return("Complaint not sent");
        }
        
    }
}

?>