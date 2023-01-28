<?php
namespace App\Controllers;
use App\Models\student_member_model;
//use App\Models\Complaints_Model;

$session = \Config\Services::session();
class Student_Otp extends BaseController 
{

public function student_otp_index(){


echo view('Student/dashboard/otp.php');
}


public function OTP_verify() {

  $session=session();
    $obj_student= new student_member_model();

       if($this->request->getmethod()=="post"){
            $msg=$_POST['msg_type'];
            $_SESSION["emg_msg"]=$msg;



            $n=4;
            $generator = "1357902468";
          
            $otp = "";
          
            for ($i = 1; $i <= $n; $i++) {
                $otp .= substr($generator, (rand()%(strlen($generator))), 1);
            }
            
            $_SESSION["sent_otp"]=$otp;

            // verifiy field empty or not
            if($_POST["con_no"] == NULL){
                    $user=$_SESSION["user_id"];
                
                    foreach ($user as $d){
                        $_SESSION["stu_con"]=$d['contact_no'];
                        $_SESSION["registation_no"]=$d['student_id'];
                        }
// entered number  
    $MSISDN=$_SESSION["stu_con"];
    $SRC ="SendTest";

    

     $MESSAGE = ( urldecode($_SESSION["sent_otp"]));
     $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd"; //Replace your Access Token
    
     
    $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);
    
             $curl = curl_init();
             
           
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
                
                echo '<script>alert("Message is not send");</script>';

               
             } else {
               echo '<script>alert("Message is sent");</script>';
                echo view('Student/dashboard/otp_verification.php'); 
                      }
            }

 else{ 
    
    $MSISDN=$_POST["con_no"];                                                                  
    $SRC ="SendTest";
   
      $MESSAGE = ( urldecode($_SESSION["sent_otp"]));
      $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd"; //Replace your Access Token
    
     
    $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);
    
             $curl = curl_init();
             
           
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
             echo  "<script type='text/javascript'>";
             echo "window.close();";
             echo "</script>";
             if ($err) {
                
                echo '<script>alert("Message is not send");</script>';
                echo view('Student/dashboard/otp_verification.php'); 
               
             } 
             
             else {
               // echo '<script>alert("Message is sent");</script>';
              
                echo view('Student/dashboard/otp_verification.php'); 
            
             }
             
     }
        }
        
                }
            
        
    
    
public function verify_otp(){
  $gender=null;
     $_SESSION['Student_otp']=$_POST["otp_no"];
    if($this->request->getMethod()=="post"){
      
      
      if($_SESSION["sent_otp"]==$_POST["otp_no"]){  
        $user=$_SESSION["user_id"];
      foreach( $user as $u){
        $gender=$u['gender'];
      }
    echo $gender;
      if($gender=='male'|| $gender=='Male'){
      echo  "aj";
        $MSISDN="0762043010";
        $SRC ="SendTest";
       
         $MESSAGE = ( urldecode($_SESSION["registation_no"]." has ".$_SESSION["emg_msg"]));
         $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd";  //Replace your Access Token
        
         
        $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);
        
                 $curl = curl_init();
                 
                //IF you are running in locally and if you don't have https/SSL. then uncomment bellow two lines
                //  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                //  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                 
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
                  echo  "<script type='text/javascript'>";
                  echo "window.close();";
                  echo "</script>";
                 if ($err) {  
                    echo '<script>alert("MESSAGE did not SEND ");</script>';
                    echo view('Student/dashboard/otp_verification.php'); 
                 } else {
                    echo '<script>alert("EMERGENCY Message sucessfully sended");</script>';                
                    echo view('Student/dashboard/index.php');
                    echo '<script>location.reload ();</script>';
                 }
        
       
      
      }
      else{
        echo 'ae';
        $MSISDN="0762043010";
        $SRC ="SendTest";
       
         $MESSAGE = ( urldecode($_SESSION["registation_no"]." has ".$_SESSION["emg_msg"]));
         $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd"; //Replace your Access Token
        
         
        $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);
        
                 $curl = curl_init();
                 
                //IF you are running in locally and if you don't have https/SSL. then uncomment bellow two lines
                //  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                //  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                 
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
                 echo  "<script type='text/javascript'>";
                  echo "window.close();";
                  echo "</script>";
                 if ($err) {  
                    echo '<script>alert("MESSAGE did not SEND ");</script>';
                    echo view('Student/dashboard/otp_verification.php'); 
                 } else {
                    echo '<script>alert("EMERGENCY Message sucessfully sended");</script>';
                    
                    echo view('Student/dashboard/index.php');
                    echo '<script>location.reload ();</script>';
                 }
        
       
        
      }
        
         } else{
        echo '<script>alert("OTP invalid ");</script>';
        echo view('Student/dashboard/otp_verification.php'); 
    }    
}
}
}


