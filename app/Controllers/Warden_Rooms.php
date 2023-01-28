<?php

namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_users;

class Warden_Rooms extends BaseController
{
    public function room(){
        echo view("Warden/Rooms/rooms.php");
    }
    function boys_list(){
        $output = '<option value="">SELECT STUDENT ID</option>';
        $obj_boys_hostel = new boys_hostel();
        $roomNo=$this->request->getVar('room_id');
        //echo "<script>alert($roomNo)</script>";
        //$result=$obj_boys_hostel->where('room_no',$roomNo)->findAll();
        
           
            foreach(($result=$obj_boys_hostel->where('room_no',$roomNo)->findAll()) as $row){
                $output .='
                <option value='.$row['student_id'].' name="tg" id="tg">'.$row['student_id'].'</option> 
                ';  
            }
            return $output;
        
        
        
    }
    function girls_list(){
        $output = '<option value="">SELECT STUDENT ID</option>';
        $obj_girls_hostel = new girls_hostel();
        $roomNo=$this->request->getVar('room_id');
        
        foreach(($result=$obj_girls_hostel->where('room_no',$roomNo)->findAll()) as $row){
            $output .='
            <option value='.$row['student_id'].' name="tg" id="tg">'.$row['student_id'].'</option> 
            ';  
        }
        return $output;
    }

    //room management
    function fetch_data(){
        $output="";
        $obj_student=new student_model();
        $st_id=$this->request->getVar('student_id');
        $result=$obj_student->where('student_id',$st_id)->findAll();
        foreach($result as $row){
           // return $row['first_name'];
        
        $output ='
        
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img id="imm" src="assets/images/Profiles/Student/'.$row['pro_pic'].' ">
                        
                    </div>
                    <div class="col-md-7 det">
                        <div class="row">
                            <div class="col-md">
                                <h2>NAME</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <h2>'.$row['first_name'].'</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <h4>Department: '.$row['department'].' </h4>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

                <div style="padding-top:20px;padding-left:70px;display:none;" id="moreDet">
                    <div class="row">
                        <div class="col-md-5">
                            <b>FULL NAME</b>
                        </div>
                        <div class="col-md-7">
                        '.$row['first_name'].' '.$row['last_name'].'
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>EMAIL</b>
                        </div>
                        <div class="col-md-7">
                         '.$row['email'].'
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>PHONE</b>
                        </div>
                        <div class="col-md-7">
                         '.$row['contact_no'].'
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>ADDRESS</b>
                        </div>
                        <div class="col-md-7">
                         '.$row['address'].'
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>NIC</b>
                        </div>
                        <div class="col-md-7">
                         '.$row['nic_number'].'
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
        return $output;
    }
    function getRooms(){
        $obj_boys_hostel = new boys_hostel();
        $floorNum=$this->request->getVar('floorNum');
        $db = \Config\Database::connect();
        $q=$db->query('select distinct room_no from boys_hostel where floor='.$floorNum.'');
        $r=$q->getResultArray();
        $output = '<option value="null" id="selRoom">SELECT A ROOM</option>';

        foreach($r as $row){
                    $output .='
                <option value='.$row['room_no'].' >'.$row['room_no'].' </option> 
                '; 
        }
        return $output;
    }
    public function fetch_gil_data(){
        $output="";
        $obj_girls_hostel = new girls_hostel();
        $roomNum=$this->request->getVar('the_room');
        
        $result=$obj_girls_hostel->where('room_no',$roomNum)->findAll();
        
        foreach($result as $row){
            
            $output .='
            
                <div class="form-check sTMem" id="stMem" for="'.$row['student_id'].'"> 
                    <input type="checkbox" class="form-check-input cbox" id="'.$row['student_id'].'" name="st_no" value="'.$row['student_id'].'">
                    <label class="form-check-label labelCheck" for="'.$row['student_id'].'" style="padding-left:40%;font-size:2em">'.$row['student_id'].'</label>
                </div>
            ';  
            
        }
        return $output;
    }
    
    public function fetch_bys_data(){
        $output="";
        $obj_boys_hostel = new boys_hostel();
        $roomNum=$this->request->getVar('the_room');
        
        $result=$obj_boys_hostel->where('room_no',$roomNum)->findAll();

        foreach($result as $row){
            
            $output .='
            
                <div class="form-check sTMem" id="stMem" for="'.$row['student_id'].'"> 
                    <input type="checkbox" class="form-check-input cbox" style="margin-bottom:1em" id="'.$row['student_id'].'" name="st_no" value="'.$row['student_id'].'">
                    <label class="form-check-label labelCheck" for="'.$row['student_id'].'" style="padding-left:50%;font-size:2em">'.$row['student_id'].'</label>
                </div>
            ';  
            
        }
        return $output;
    }
    public function changeRoomsBoys(){
        $output="";
        $obj_boys_hostel = new boys_hostel();
        $NewFloor=$this->request->getVar('newF');
        $NewRoom=$this->request->getVar('newR');
        $st1=$this->request->getVar('st1');
        $st2=$this->request->getVar('st2');
        $st3=$this->request->getVar('st3');
        $st4=$this->request->getVar('st4');
        $arr1="";
        $arr2="";
        $arr3="";
        $arr4="";
        
        //$output=$NewRoom+" "+$NewFloor;
        //taking the count of the new student details
        $count=0;
        $arr1=array(
            'room_no'=>$NewRoom,
            'floor'=>$NewFloor,
            'student_id'=>$st1
        );
        if($st1!=null){
            $count+=1;
        }
        if($st2!=null){
            $count+=1;
        }
        if($st3!=null){
            $count+=1;
        }
        if($st4!=null){
            $count+=1;
        }
        
        //find weather how many students are already in the new room
        $result=$obj_boys_hostel->where('room_no',$NewRoom)->findAll();
        $countRe=count($result);

        //taking the total count to check weather it's less than 4
        $TotalCount=$count+$countRe;
        if($TotalCount<5){
            $reDel=$obj_boys_hostel->where('student_id',$st1)->delete();
            if(!$reDel){
                $output.="Cannot delete";
            }
            $reIn=$obj_boys_hostel->insert($arr1);
            
            if($reIn){
                $output .="
                    '.$count.' Number of new Students have changed the room to '.$NewRoom.'; 
                ";
            }
        
        }else{
            $output .="There are '.$countRe.' students have already registered in Room No: '.$NewRoom.' and you have selected '.$count.' new students";
            $output .="<b>Maximum only 4 Students</b>";
        }
        
        return $output;
    }
    public function changeRoomsGirls(){
        $output="";
        $obj_girls_hostel = new girls_hostel();
        $NewFloor=$this->request->getVar('newF');
        $NewRoom=$this->request->getVar('newR');
        $st1=$this->request->getVar('st1');
        $st2=$this->request->getVar('st2');
        $st3=$this->request->getVar('st3');
        $st4=$this->request->getVar('st4');
        $arr1="";
        $arr2="";
        $arr3="";
        $arr4="";
        
        //$output=$NewRoom+" "+$NewFloor;
        //taking the count of the new student details
        $count=0;
        $arr1=array(
            'room_no'=>$NewRoom,
            'floor'=>$NewFloor,
            'student_id'=>$st1
        );
        if($st1!=null){
            $count+=1;
        }
        if($st2!=null){
            $count+=1;
        }
        if($st3!=null){
            $count+=1;
        }
        if($st4!=null){
            $count+=1;
        }
        
        //find weather how many students are already in the new room
        $result=$obj_girls_hostel->where('room_no',$NewRoom)->findAll();
        $countRe=count($result);

        //taking the total count to check weather it's less than 4
        $TotalCount=$count+$countRe;
        if($TotalCount<5){
            $reDel=$obj_girls_hostel->where('student_id',$st1)->delete();
            if(!$reDel){
                $output.='Cannot delete';
            }
            $reIn=$obj_girls_hostel->insert($arr1);
            
            if($reIn){
                $output.='
                    '.$count.' Number of new Students have changed the room to '.$NewRoom.'; 
                ';
            }
        
        }else{
            $output='There are '.$countRe.' students have already registered in Room No: '.$NewRoom.' and you have selected '.$count.' new students
            
            ';
            $output.='<b>Maximum only 4 Students</b>';
        }
        
        return $output;
    }
}
