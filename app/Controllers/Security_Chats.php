<?php

namespace App\Controllers;
use App\Models\model_warden;
use App\Models\model_dean;
use App\Models\student_model;
use App\Models\Security_model;
use App\Models\chats_model;
use App\Models\model_subwarden;
use App\Models\student_member_model;

//home pages
class security_Chats extends BaseController
{
    function getChats(){
        $output="";
        $sender='Security';
        $obj_chat = new chats_model();
        $theUser=$this->request->getVar('userChat');
        //echo "<script>alert($theUser)</script>";
        $dataArray=['receiver_id'=>$theUser , 'sender_id'=>$theUser];
        $dataArray2=['sender_id'=>$theUser , 'receiver_id'=>$sender];
        foreach(($result=$obj_chat->orderBy('date ASC', 'time ASC')->findAll()) as $row){
            if(($row['sender_id']==$sender)&&($row['receiver_id']==$theUser)){
                $output .='
                <div id="newMsg" class="msg" style="margin-left:10%;">'.$row['chat'].'
                    
                </div>
                <div class="time" style="width:70px;margin-left: 370px;
        ">'.$row['time'].'</div>
                '; 
            }else if(($row['receiver_id']==$sender)&&($row['sender_id']==$theUser)){
                
            $output .='
            <div id="newMsg" class="sent">'.$row['chat'].'</div>
            <div class="timeS" style="width:70px;">'.$row['time'].'</div>
            '; 
            }
            
             
        }
        return $output;
    }
    function getProPic()
    {
        $theUser = $this->request->getVar('type');
        $output = '';
        switch ($theUser) {
            case 'dean':
                $obj_war = new model_dean();
                foreach(($result=$obj_war->findAll(4)) as $row){
                    $output .='
                    
                    <td>
                        <img src="assets/images/Profiles/dean/'.$row['pro_pic'].'" class="imgProBox">
                    </td>
                    
                    ';  
                    
                }
            return $output;
            break;
            case 'warden':

                $obj_sw = new model_warden();
                foreach (($result = $obj_sw->findAll(4)) as $row) {
                    $output .= '
                    
                    <td>
                        <img src="assets/images/Profiles/Warden/' . $row['pro_pic'] . '" class="imgProBox">
                    </td>
                    
                    ';
                }
                return $output;
                break;
            
        }
    }

    function sendChats(){
        $output="";
        $obj_chat = new chats_model();
        $theUser=$this->request->getVar('userChat');
        $theChat=$this->request->getVar('msg');
        $date=date('Y-m-d');
        $time=date('H:i:s');
        $sender='Security';
        $data=["sender_id"=>$sender,"receiver_id"=>$theUser,"date"=>$date,"time"=>$time,"chat"=>$theChat];

        //$response=$this->$obj_chat->saverecords($sender,$theUser,$date,$time,$theChat);
        $result=$obj_chat->save($data);
        if($result){
            $output .='
            <div id="newMsg" class="msg" style="margin-left:10%;">'.$theChat.'
                
            </div>
            <div class="time" style="width:70px;margin-left: 370px;
    ">'.$time.'</div>
            '; 
        }
            //$output.=$theUser;
            //$output .=''.$theUser.'';


            /*
            

            */
            return $output;
    }
    function getdean(){
        $output="<option selected>SELECT USER</option>";
        $obj_sw=new model_dean();
        foreach(($result=$obj_sw->findAll()) as $row){
            $output .='
            <option value='.$row['user_id'].' name="tg" id="tg">'.$row['first_name'].'</option> 
            ';  
        }
        return $output;
    }
    function getWarden(){
        $output="<option selected>SELECT USER</option>";
        $obj_w=new model_warden();
        foreach(($result=$obj_w->findAll()) as $row){
            $output .='
            <option value='.$row['user_id'].' name="tg" id="tg">'.$row['first_name'].'</option> 
            ';  
        }
        return $output;
    }
    
}