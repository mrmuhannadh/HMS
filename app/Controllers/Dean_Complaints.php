<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\model_dean;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\model_users;
use App\Models\model_complaints;

class Dean_Complaints extends BaseController
{
    public function index()
    {
        echo view('dean/complaints/complaints.php');
        
    }
    public function getComplaints()
    {
        $userM=new model_users();
        $output='';
        $receiver=$this->request->getVar('id');
        $obj_complaint = new model_complaints();
        $uRe=$userM->where('user_id',$receiver)->findAll();
        $userType='';
        foreach($uRe as $uType){
            $userType=$uType['post'];
        }
        $result=$obj_complaint->where('receiver',$userType)->findAll();
        foreach($result as $row){
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
    
        
    }

?>