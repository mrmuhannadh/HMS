<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\security_model;
use App\Models\entry_leave_Model;
use App\Models\model_users;

//home pages
class Security_Dashboard extends BaseController
{
    public function index()
    {
        $session=session();
        $st_id='';
        $obj_student= new student_model();
        $obj_attendance= new entry_leave_Model();
        $res=$obj_student->orderBy('student_id')->limit(1)->find();
        $_SESSION["at_st_details"]=$res;
        foreach($res as $res1){
           $st_id=$res1['student_id'];
        }
        
        $res2=$obj_attendance->where('student_id',$st_id)->orderBy('no', 'desc')->limit(1)->find();
        $_SESSION["att_student"]=$res2;
        echo view('security/dashboard/index.php');
    }

    public function Send_sms_student()
    {
        echo view('Security/dashboard/Send_sms_student.php'); 
    }

    public function get_details(){
        $obj_security= new security_model();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_security->where('user_id',$user)->findAll()) as $d){
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
    public function Se_search()
    {  
       
        $session=session();
        $obj_student= new student_model();
       
       if($this->request->getMethod()=="post"){
        
        
       // check all the text box are fill
                    if(($_POST['tg']==null) && ($_POST['name']==null) && ($_POST['mobile']==null)){
                        echo '<script>alert("you have to enter Name / TG number / phone number to find data of a student  ");</script>';
                        echo view('Security/dashboard/Send_sms_student.php');
                    }  
        // check the name number
        if($_POST['name']!=null){
            $res=$obj_student->where('first_name',$_POST['name'])->findAll();
            if(!$res==NULL){
                $_SESSION["se_student"]=$res;
                
                return redirect('Send_sms_student');
                            }
            else{
                echo '<script>alert("you have to enter correct Name to find data of a student  ");</script>';
                echo view('Security/dashboard/Send_sms_student.php'); 
                            }           
        }            


                    else if($_POST['tg']!=null){
                        $_SESSION["se_student"]=$res=$obj_student->where('student_id',$_POST['tg'])->findAll();
                       
                        if(!$res==NULL){
                            $_SESSION["se_student"]=$res;
                              

                            return redirect('Send_sms_student');
                                }
                        else{
                            echo '<script>alert("you have to enter correct TG number to find data of a student  ");</script>';
                            echo view('Security/dashboard/Send_sms_student.php'); 
                        }                
                        
                    } 

        // check the name
                    
        // check moblie number
                    else if($_POST['mobile']!=null){
                        echo $_POST['mobile'];
                        $res=$obj_student->where('contact_no',$_POST['mobile'])->findAll();
                        if(!$res==NULL){
                            $_SESSION["se_student"]=$res;
                            return redirect('Send_sms_student');
                                        } 
                        else{
                            echo '<script>alert("you have to enter correct moblie number to find data of a student  ");</script>';
                            echo view('Security/dashboard/Send_sms_student.php');   
                            }                  
                     }
             }
}




public function se_send_Message()
{
    if($this->request->getMethod()=="post"){
      // SMS part
      // we meed to change 
  
    $MSISDN=$_POST['moblieA'];
    $SRC ="SendTest";

	 $MESSAGE = ( urldecode($_POST['messageA']));
     $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd"; //Replace your Access Token
    
     
    $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);
 
 
             
             $curl = curl_init();
             
             //IF you are running in locally and if you don't have https/SSL. then uncomment bellow two lines
             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
             
             curl_setopt_array($curl, array(
               CURLOPT_URL => "https://sms.send.lk/api/v3/sms/send",
               CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_POSTFIELDS => json_encode($msgdata),
                CURLOPT_HTTPHEADER => array(
                 "accept: application/json",
                 "authorization: Bearer $AUTH",
                 "cache-control: no-cache",
                 "content-type: application/x-www-form-urlencoded",
               ),
             ));
 
            curl_exec($curl);
            $err = curl_error($curl);
 
             curl_close($curl);
 
             if ($err) {
                
                echo '<script>alert("Message is not send"." $err");</script>';
                //this is for get error msg
               //echo "cURL Error #:" . $err;
             } else {
                echo '<script>alert("Message is sent");</script>';
                //this is for get error msg
               //echo  $response;
             }   
        
    }
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
}







public function se_changePassword(){
    echo '<script>alert("current passworld is incorrect");</script>';
        
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






// new edit

// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa



public function update_propic(){
        
        
    if(isset($_POST['submit'])){
        $obj_security= new security_model();
        $file= $this->request->getFile('image');
        $user = $this->request->getVar('user_id');
       if($file->isValid()){
           $imgName= $file->getRandomName();
            $file->move('assets/images/Profiles/Security/',$imgName);

            $data=array(
                'pro_pic'=>$imgName,  
            );
            $re=$obj_security->where('user_id',$user)->set($data)->update();
            if($re){
                //echo "updated";
                //redirect('/');
                return redirect()->to('secprof');
            }
            //echo $user;
            
        }else{
           echo "<script>alert('Cannot update the image')</script>";
           return redirect()->to('secprof');
        }
        

    }
}
public function model_click_update(){
    $obj_security= new security_model();

    $output="";
    $user=$this->request->getVar('the_user');
    foreach(($result=$obj_security->where('user_id',$user)->findAll()) as $d){
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

public function update_user(){
    $obj_security= new security_model();

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
    $reUp=$obj_security->where('user_id',$user)->set($data)->update();
    if($reUp){
        foreach(($result=$obj_security->where('user_id',$user)->findAll()) as $d){
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

public function getProPicOfMineForHeader(){
    $output = '';
    $obj_security= new security_model();
    $user=$this->request->getVar('user');
    $re=$obj_security->where('user_id',$user)->findAll();
    foreach($re as $row){
        $img=$row['pro_pic'];
        $output .='
            <img src="assets/images/Profiles/Security/'.$img.'" class="logoT">
        ';
        
    }
    return $output;
}

public function getProPicOfMine(){
    $output = '';
    $obj_security= new security_model();
    $user=$this->request->getVar('user');
    $re=$obj_security->where('user_id',$user)->findAll();
    foreach($re as $row){
        $img=$row['pro_pic'];
        $output .='
            <img src="assets/images/Profiles/Security/'.$img.'" class="propic">
        ';
        
    }
    return $output;
}
public function prof(){
    echo view("Security/dashboard/index.php");
}

public function chat(){
    echo view("Security/chat/chat.php");
}
    
}


?>