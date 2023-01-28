<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\student_member_model;
use App\Models\Complaints_Model;
use App\Models\model_users;
$session = \Config\Services::session();

class Student_Dashboard extends BaseController
{
    
    public function index()
    {
        echo view('Student/dashboard/index.php');
        
    }
    


    public function get_details(){
        $obj_student= new student_member_model();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_student->where('student_id',$user)->findAll()) as $d){
            $output .='
            <table border="0" class="table table-borderless table-hover table-light tbl"  style="background:white;color:black;" >
                            
                            
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
        return $output;
        
    }
    public function model_click_update(){
        $obj_student= new student_member_model();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_student->where('student_id',$user)->findAll()) as $d){
            $output .='
            <table border="0" class="table table-borderless table-light tbl ">
                                                    
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

            $obj_student= new student_member_model();
            $file= $this->request->getFile('image');
            $user = $this->request->getVar('user_id');
           if($file->isValid()){
               $imgName= $file->getRandomName();
                //$file->move('profile/',$imgName);
                $file->move('assets/images/Profiles/Student/',$imgName);
                $data=array(
                    'pro_pic'=>$imgName

                );
                $re=$obj_student->where('student_id',$user)->set($data)->update();
                if($re){
                    //echo "updated";
                    //redirect('/');
                    return redirect()->to('profile');
                }
                //echo $user;

            }else{
               echo "<script>alert('Cannot update the image')</script>";
               return redirect()->to('profile');
            }


        }
           
        //     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
        //     $tname = $_FILES["file"]["tmp_name"];
        //     echo $pname;
        //     $uploads_dir=base_url()."/assets/images/Profile/Student";
        //     $mv=move_uploaded_file($tname,$uploads_dir.'/'.$pname);
        //     if(!$mv){
        //         echo "coono";
        //         }
        // }
    }

    public function getProPicOfMine(){
        $output = '';
        $obj_student= new student_member_model();
        $user=$this->request->getVar('user');
        $re=$obj_student->where('student_id',$user)->findAll();
        foreach($re as $row){
            $img=$row['pro_pic'];
            $output .='
                <img src="assets/images/Profiles/Student/'.$img.'" class="propic">
            ';

        }
        return $output;
    }
    public function getProPicOfMineForHeader(){
        $output = '';
        $obj_student= new student_member_model();
        $user=$this->request->getVar('user');
        $re=$obj_student->where('student_id',$user)->findAll();
        foreach($re as $row){
            $img=$row['pro_pic'];
            $output .='
                <img src="assets/images/Profiles/Student/'.$img.'" class="logoT">
            ';

        }
        return $output;
    }

    public function update_user(){
        $obj_student= new student_member_model();

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
        
        //$re=$obj_warden->where('user_id',$user);
        //$reUp=$this->db->update('warden',$data);
        //$reUp=$obj_warden->update($data);
        $reUp=$obj_student->where('student_id',$user)->set($data)->update();
        if($reUp){
            foreach(($result=$obj_student->where('user_id',$user)->findAll()) as $d){
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
    

//for room page
public function req(){
    echo view("Student/Request/request.php");
}
public function profile(){
    echo view("Student/dashboard/index.php");
}
public function reg(){
    echo view("Student/Register/register.php");
}
public function hom(){
    echo view("Student/Home/home.php");
}



}
?>
