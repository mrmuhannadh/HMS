<?php

namespace App\Controllers;

use App\Models\model_users;
use App\Models\model_warden;
use App\Models\Security_model;
use App\Models\admin_model;
use App\Models\model_subwarden;
use App\Models\model_dean;
use App\Models\student_member_model;
use App\Models\GalleryModel;
use App\Models\model_password_reset;

$session = \Config\Services::session();
class Home extends BaseController
{


    public function index()
    {
        echo view('index.php');
    }
    public function gallery()
    {
        $gallery = new GalleryModel();
        $data['images'] = $gallery->findAll();
        echo view('HomePage/gallery/gallery.php', $data);
        //echo view('HomePage/gallery2.php');
    }

    public function contactUsView()
    {
        echo view('HomePage/contact_us.php');
    }
    public function contactUs()
    {
        $email = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $message = $this->request->getPost('message');
        $this->sendEmail('pptn02@gmail.com', $name, $message);
        echo "<script>alert('Mail sent successfully. We will contact you soon');</script>";
        echo view('index.php');
    }

    public function getImages()
    {
    }
    public function login()
    {
        echo view('index.php');
    }
    public function check_user()
    {
        $session = session();
        $obj_user = new model_users();
        if ($this->request->getMethod() == "post") {

            $pw = md5($_POST['password']);

            $res = $obj_user->where(['user_id' => $_POST['user'], 'password' => $pw])->first();
            if (!$res == NULL) {

                $userResult = $obj_user->where('user_id', $_POST['user'])->findAll();
                foreach ($userResult as $userd) {

                    switch ($userd['post']) {
                        case 'warden':
                            $users_id = $_POST['user'];
                            $obj_warden = new model_warden();
                            $_SESSION["user_id"] = $obj_warden->where('user_id', $users_id)->findAll();
                            return redirect('Warden_dashboard');
                            break;
                        case 'subwarden':
                            $users_id = $_POST['user'];
                            $obj_SW = new model_subwarden();
                            $_SESSION["user_id"] = $obj_SW->where('user_id', $users_id)->findAll();
                            return redirect('SubWarden_dashboard');
                            break;
                        case 'security':
                            $user_se = null;
                            $users_id = $_POST['user'];
                            $obj_Security = new Security_model();
                            $_SESSION["user_id"] = $obj_Security->where('user_id', $users_id)->findAll();
                            return redirect('Security_login');
                            break;
                        case 'dean':
                            $users_id = $_POST['user'];
                            $obj_Dean = new model_dean();
                            $_SESSION["user_id"] = $obj_Dean->where('user_id', $users_id)->findAll();
                            return redirect('dean_dashboard');
                            break;
                        case 'admin':
                            $users_id = $_POST['user'];
                            $obj_admin = new admin_model();
                            $_SESSION["user_id"] = $obj_admin->where('admin_id', $users_id)->findAll();
                            return redirect('admin_login');

                            break;
                        case 'student':
                            $users_id = $_POST['user'];
                            $obj_student = new student_member_model();
                            $_SESSION["user_id"] = $obj_student->where('student_id', $users_id)->findAll();
                            return redirect('stu_dashboard');
                    }
                }
            } else {
                echo "<script>alert('check user name and passowrd');</script>";
                return redirect('login');
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect('login');
    }

    private function sendEmail($toEmail, $subject, $message)
    {
        $config = config('Email');
        $email = \Config\Services::email();
        $email->setFrom($config->fromEmail, 'HMS');
        $email->setTo($toEmail);
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();
    }

    public function forgot_password_view()
    {
        echo view('login/forgotPassword.php');
    }

    public function forgot_password()
    {
        $email = $this->request->getPost('email');
        $userModel = new model_users();
        $user = $userModel->where('email', $email)->find();
        echo '<script type="text/javascript">' .
            'console.log(' . json_encode($user) . ');</script>';
        if ($user == null) {
            echo "<script>alert('No users in the email');</script>";
        } else {
            $passwordReset = new model_password_reset();
            $otp = rand(1000, 9999);
            $data = [
                'email' => $email,
                'otp' => $otp,
                'used' => false,
            ];
            $check = $passwordReset->where('email', $email)->delete();
            $passwordReset->insert($data);
            $re = $passwordReset->where('email', $email)->find();
            if ($re) {
                $this->sendEmail($email, "Password reset", "Your OTP is " . strval($otp));
                return redirect('reset_password');
            } else {
                echo '<script>alert("Try again");</script>';
                return redirect('forgot_password');
            }
        }
    }
    public function reset_password_view()
    {
        echo view('login/resetPassword.php');
    }

    public function reset_password()
    {
        $email = $this->request->getPost('email');
        $otp = $this->request->getPost('otp');
        $newPassword = $this->request->getPost('newPassword');
        $password_reset_model = new model_password_reset();
        $row = $password_reset_model->where('email', $email)->findAll();
        if ($row == null) {
            echo "<script>alert('OTP not generated');</script>";
        } else {
            $send_otp = $row[0]['otp'];
            $isUsed = $row[0]['used'];
            if ($isUsed) {
                echo "<script>alert('OTP already used');</script>";
            } else {
                if ($send_otp == $otp) {
                    $user = new model_users;
                    $pw = md5($newPassword);
                    $user->where('email', $email)->set('password', $pw)->update();
                    $password_reset_model->where('email', $email)->set('used', true)->update();
                    echo "<script>alert('Password changed successfully');</script>";
                    return redirect('login');
                } else {
                    echo "<script>alert('Incorrect OTP');</script>";
                    return redirect('reset_password');
                }
            }
        }
    }

    public function showImg(){
        $name=$this->request->getVar('img');
        $output='';
        $output .='
        <img src="assets/Images/Gallery/'.$name.'" class="showimg">
        ';

        return $output;
    }
}
