<?php

namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_users;
use App\Models\model_dean;

//home pages
class Dean_Dashboard extends BaseController
{
   
    public function index()
    {
        echo view('dean/dashboard/index.php');
        
    }

    public function get_details(){
        $obj_dean= new model_dean();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_dean->where('user_id',$user)->findAll()) as $d){
            $output .='
          
                            
                            
                                <tr>
                                    <th>
                                        FIRST NAME: 
                                    </th>
                                    <td>
                                        '. $d['first_name'] .'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        LAST NAME: 
                                    </th>
                                    <td>
                                        '. $d['last_name'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>
                                        MOBILE: 
                                    </th>
                                    <td>
                                    '.  $d['contact_no'].'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        EMAIL: 
                                    </th>
                                    <td>
                                    '.  $d['email'].'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ADDRESS: 
                                    </th>
                                    <td>
                                    '. $d['address'].'
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                <div class="col-md-12 text-right">
                                    <i class="fas fa-chevron-circle-down" onclick="showMoreData()" style="font-size:20px;padding-bottom:10;" type="button" ></i>
                                </div>
                                </td>
                                    <td >
                                    <div class="col-md-12 text-right">
                                    <i class="fas fa-edit" style="font-size:20px;padding-bottom:10;" type="button" class="btn btn-primary" data-toggle="modal" onclick="updateBTN()" data-target="#exampleModalCenter"></i>
                                    </div>
                                    </td>
                                </tr>
                          
                            
            ';  
        }
        return $output;
        
    }
    public function model_click_update(){
        $obj_dean= new model_dean();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_dean->where('user_id',$user)->findAll()) as $d){
            $output .='
            <table border="0" class="table table-borderless table-light tbl " style="color:black">
                                                    
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label for="validationCustom01" class="form-label">FIRST NAME</label>
                            <input type="text" class="form-control" id="fname" class="fname" value="'. $d['first_name'].'" name="fname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label for="validationCustom01" class="form-label">LAST NAME</label>
                            <input type="text" class="form-control" id="lname" class="lname" value="'. $d['last_name'].'" name="lname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label for="validationCustom01" class="form-label">MOBILE</label>
                            <input type="text" class="form-control" id="mobile" class="mobile" value="'.$d['contact_no'].'" name="mobile" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                </div>
            <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label for="validationCustom01" class="form-label">EMAIL</label>
                            <input type="text" class="form-control" id="email" class="email" value="'. $d['email'].'" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                </div>
            <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label for="validationCustom01" class="form-label">ADDRESS</label>
                            <input type="text" class="form-control" id="address" class="address" value="'. $d['address'].'" name="address" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                
                </div>
                
                                         
            
    </table>
            ';  
        }
        return $output;
        
    }
    public function update_propic(){
        
        
        if(isset($_POST['submit'])){
           
            $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
            $tname = $_FILES["file"]["tmp_name"];
            echo $pname;
            $uploads_dir=base_url()."/assets/images/Profile/dean";
            $mv=move_uploaded_file($tname,$uploads_dir.'/'.$pname);
            if(!$mv){
                echo "coono";
                }
        }
    }
    public function update_user(){
        $obj_dean= new model_dean();

        $output="";
        $user=$this->request->getVar('user');
        $fname=$this->request->getVar('Fname');
        $lname=$this->request->getVar('Lname');
        $mobile=$this->request->getVar('mobile');
        $email=$this->request->getVar('email');
        $address=$this->request->getVar('address');
        
        $data=array(
            'user_id'=>$user,
            'first_name'=>$fname,
            'last_name'=>$lname,
            'address'=>$address,
            'contact_no'=>$mobile,
            'email'=>$email
        );

        $reUp=$obj_dean->where('user_id',$user)->set($data)->update();
        if($reUp){
            foreach(($result=$obj_dean->where('user_id',$user)->findAll()) as $d){
                $output .='
                <table border="0" class="table table-borderless table-light tbl" >
                                
                                
                                    <tr>
                                        <th>
                                            FIRST NAME: 
                                        </th>
                                        <td>
                                            '. $d['first_name'] .'
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            LAST NAME: 
                                        </th>
                                        <td>
                                            '. $d['last_name'].'
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>
                                            MOBILE: 
                                        </th>
                                        <td>
                                        '.  $d['contact_no'].'
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            EMAIL: 
                                        </th>
                                        <td>
                                        '.  $d['email'].'
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ADDRESS: 
                                        </th>
                                        <td>
                                        '. $d['address'].'
                                        </td>
                                    </tr>
                                    
                                </table>
                ';  
            }
        }else{
            $output .="Cannot Update";
        }
        
        return $output;
    }
    public function changePassword(){
        $output='';
        $obj_user= new model_users();
        $user=$this->request->getVar('userID');
        $oldPw=md5($this->request->getVar('oldPw'));
        $newPw=md5($this->request->getVar('newPw'));
        $userPw=array(
            'user_id'=>$user,
            'password'=>$oldPw
        );
        $re=$obj_user->where($userPw)->findAll();
        if(!$re){
            $output .='
            <div class="status" id="insideStatus" style="text-align:center;color:red;">
            Your current password is wrong
          </div>
            ';
            
        }else{
            //return("There");
            $reChange=$obj_user->where('user_id',$user)->set('password',$newPw)->update();
            if($reChange){
                $output .='
            <div class="status" id="insideStatus" style="text-align:center;color:green;">
            Password reset success
          </div>
            ';
            }
        }
        return $output;
        //return $oldEnc;
    }
    //load pages
    
    public function prof(){
        echo view("dean/dashboard/index.php");
    }
    public function chat(){
        echo view("dean/Chat/chat.php");
    }
    
    public function complaints(){
        echo view("dean/complaints/complaints.php");
    }
    public function notice(){
        echo view("dean/notice/notice.php");
    }
    public function rooms(){
        echo view("dean/Rooms/rooms.php");
    }
    
}
?>