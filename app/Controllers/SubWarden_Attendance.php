<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_complaints;
use App\Models\model_subwarden;
use App\Models\model_entry_leave;
use CodeIgniter\CLI\Console;

class SubWarden_Attendance extends BaseController
{
    public function index()
    {
        echo view('SubWarden/Attendence/attendence.php');   
    }
    public function searchStudent(){
        $output='';
        $obj_EL=new model_entry_leave();
        $input=$this->request->getVar('input');
        if($input=="all"){
            $re=$obj_EL->findAll();
            foreach($re as $row){
                $output .='
                    <tr>
                        <td scope="col">'.$row['student_ID'].'</td>
                        <td scope="col">'.$row['enter_date'].'</td>
                        <td scope="col">'.$row['enter_time'].'</td>
                        <td scope="col">'.$row['exit_date'].'</td>
                        <td scope="col">'.$row['exit_time'].'</td>
                    </tr>
            
            ';
            }
            return $output;
        }else{
            $re=$obj_EL->where('student_ID',$input)->findAll();
        $date=date('Y-m-d');

        foreach($re as $row){
            $output .='
            <tr>
                <td scope="col">'.$row['student_ID'].'</td>
                <td scope="col">'.$row['enter_date'].'</td>
                <td scope="col">'.$row['enter_time'].'</td>
                <td scope="col">'.$row['exit_date'].'</td>
                <td scope="col">'.$row['exit_time'].'</td>
            </tr>
            
            ';
             if(($row['exit_date']=="")&&($row['exit_time']=="")){

             }
        }
        return $output;
        }
        
        
    }
    public function studentStatus(){
        $output='';
        $obj_EL=new model_entry_leave();
        $input=$this->request->getVar('input');
        if($input=="all"){
            $output .='
                <div class="text stBox">All the details are listed in the table</div>
            ';
            return $output;
        }
        $re=$obj_EL->where('student_ID',$input)->orderBy('no', 'desc')->limit(1)->find();
        foreach($re as $row){
            //get date
            $date=date('Y-m-d');
            $dateEx=$row['exit_date'];

            //get time
            $time=date('H:i:s');
            $Extime=$row['exit_time'];

            //calculate the no of days that after exit
            $dDate=abs(strtotime($date)-strtotime($dateEx));
            $years = floor($dDate / (365*60*60*24));
            $months = floor(($dDate - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($dDate - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


            $dTime=strtotime($time)-strtotime($Extime);
            $dTinMins=round($dTime/60);
            $dTimHrs=round($dTinMins/60);
            $dTimBlc=round($dTinMins%60);
            //$dDiff=$date-$dateEx;
            
             if(($row['exit_date']=='0000-00-00')&&($row['exit_time']=='00:00:00')){
                //return ("NO exit");
                //entered date
                
                $enDate=$row['enter_date'];
                $eDiffDate=abs(strtotime($enDate)-strtotime($date));
                $years = floor($eDiffDate / (365*60*60*24));
                $months = floor(($eDiffDate - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($eDiffDate - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                //return ($dDate);

                //entered time
                $enTime=$row['enter_time'];
                $dTime=strtotime($time)-strtotime($enTime);
                $dTinMins=round($dTime/60);
                $dTimHrs=round($dTinMins/60);
                $dTimBlc=round($dTinMins%60);
                 if($eDiffDate==0){
                    
                    $output .='
                    <div class="text stBox">INSIDE THE HOSTEL <br>JUST CAME Today '.$dTimHrs.' hour/s and '.$dTimBlc.' minute/s ago</div>
                 ';
                 }else{
                    $output .='
                    <div class="text stBox">INSIDE THE HOSTEL <br>CAME before '.$days.' day/s and  '.$dTimHrs.' hour/s and '.$dTimBlc.' minute/s ago</div>
                 ';
                 }
                
             }else{
                //return ("exit");
                if($dDate==0){
                    $output .='
                    <div class="text stBox">NOT INSIDE THE HOSTEL <br>JUST <span style="color:red">LEAVED</span>  Today '.$dTimHrs.' hour/s '.$dTimBlc.' minute/s ago</div>
                 ';
                 }else{
                    $output .='
                    <div class="text stBox">NOT INSIDE THE HOSTEL <br><span style="color:red">LEAVED</span> before '.$days.' day/s and '.$dTimHrs.' hour/s '.$dTimBlc.' minute/s ago</div>
                 ';
                 }
             }
        }
        return $output;
        
    }
}
