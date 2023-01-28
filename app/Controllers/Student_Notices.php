<?php

namespace App\Controllers;
//use App\Models\DashboardModel;

use App\Models\notice_Model;

class Student_Notices extends BaseController{

    // public function notice(){
    //     $noti= new notice_Model();
    //     $data['notice']=$noti->findAll();
    //     echo view("Student/Notice/notice.php",$data);
    
    // }

    public function index(){
        echo view("Student/Notice/notice.php");
    }
    


    public function getNotices(){
        $output="";
        $obj_notice=new notice_Model();
        foreach(($result=$obj_notice->findAll()) as $row){
            $f=$row['file'];
            if($f!=""){
                $output .='
                <tr >
                
            

                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['owner'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button"  onclick="myFunction(this.id)">View More</div></td>    
                                 
                </tr>
                <tr  class="moreDet"  id="div'.$row['notice_id'].'T">
                <th colspan="3" >
                <div class="container">
                <div class="row" id="in">
                    '.$row['notice'].'
                </div>
                </div>
                </th>
                <td>
                    <a href="'. $f .' " target="_black" class="noticeDown">Download</a>
                </td>
                </tr>
            '; 
            }else{
                $output .='
                <tr >
            
                    <td>'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['owner'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button" value='.$row['notice_id'].'  onclick="myFunction(this.id)"">View More</div></td>      
                                
                    
                </tr>
                <tr class="moreDet" id="div'.$row['notice_id'].'T">
                <th colspan="4"  style="text-align:left;">
                <div class="container">
                    <div class="row">
                        '.$row['notice'].'
                    </div>
                </div>
                </th>
                
                </tr>
            '; 
            }
             
        }
        
        return $output;

        
    }
    
   
}


