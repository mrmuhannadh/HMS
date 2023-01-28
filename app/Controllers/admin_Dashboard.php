<?php

namespace App\Controllers;



//use App\Models\DashboardModel;
use App\Models\admin_model;
use App\Models\user;
use App\Models\notice_model;
use App\Models\products;
use App\Models\complaints_model;
use App\Models\chatbot_model;
use App\Models\image_model;

use App\Models\model_dean;
use App\Models\Security_model;
use App\Models\model_warden;
use App\Models\model_subwarden;
use App\Models\student_member_model;
use App\Models\student_model;
use App\Models\model_users;
use Tests\Support\Models\UserModel;

$session = \Config\Services::session();

class admin_Dashboard extends BaseController
{


    public function index()
    {
        echo view('admin/dashboard/index.php');
    }

    public function update_propic()
    {


        if (isset($_POST['submit'])) {
            $obj_swarden = new admin_model();
            $file = $this->request->getFile('image');
            $user = $this->request->getVar('user_id');
            if ($file->isValid()) {
                $imgName = $file->getRandomName();
                //$file->move('profile/',$imgName);
                $file->move('assets/images/Profiles/Admin/', $imgName);
                $data = array(
                    'pro_pic' => $imgName
                );
                $re = $obj_swarden->where('admin_id', $user)->set($data)->update();
                if ($re) {
                    //echo "updated";
                    //redirect('/');
                    return redirect()->to('admin_login');
                }
                //echo $user;

            } else {
                echo "<script>alert('Cannot update the image')</script>";
                return redirect()->to('admin_login');
            }
        }
    }

    public function getProPicOfMine()
    {
        $output = '';
        $obj_warden = new admin_model();
        $user = $this->request->getVar('user');
        $re = $obj_warden->where('admin_id', $user)->findAll();
        foreach ($re as $row) {
            $img = $row['pro_pic'];
            $output .= '
                <img src="assets/images/Profiles/Admin/' . $img . '" class="propic">
            ';
        }
        return $output;
    }
    public function getProPicOfMineForHeader()
    {
        $output = '';
        $obj_warden = new admin_model();
        $user = $this->request->getVar('user');
        $re = $obj_warden->where('admin_id', $user)->findAll();
        foreach ($re as $row) {
            $img = $row['pro_pic'];
            $output .= '
                <img src="assets/images/Profiles/Admin/' . $img . '" class="logoT"  href="#" id="dropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ';
        }
        return $output;
    }

    public function get_details()
    {
        $obj_admin = new admin_model();

        $output = "";
        $user = $this->request->getVar('the_user');
        foreach (($result = $obj_admin->where('admin_id', $user)->findAll()) as $d) {
            $output .= '
            <table border="0" class="table table-borderless table-light tbl" >

                                <tr>
                                    <th>
                                        FIRST NAME: 
                                    </th>
                                    <td>
                                        ' . $d['first_name'] . '
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        LAST NAME: 
                                    </th>
                                    <td>
                                        ' . $d['last_name'] . '
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>
                                        MOBILE: 
                                    </th>
                                    <td>
                                    ' .  $d['contact_no'] . '
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        EMAIL: 
                                    </th>
                                    <td>
                                    ' .  $d['email'] . '
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ADDRESS: 
                                    </th>
                                    <td>
                                    ' . $d['address'] . '
                                    </td>
                                </tr>
                                
                            </table>
            ';
        }
        return $output;
    }

    public function update_user()
    {
        $obj_admin = new admin_model();
        if ($this->request->getMethod() == "post") {
            $arrU = array(
                'name' => $_POST['name'],
                'gender' => $_POST['gender'],
                'password	' => $_POST['password'],
                'email' => $_POST['email'],
                // 'admin_id '=>$_POST['admin_id '],
                'pro_pic' => $_POST['pro_pic']
            );

            //$data=('user_id'->'wB001');
            $reUp = $obj_admin->update('admin', $arrU);
            if (!$reUp) {
                echo "Cannot update";
            } else {
                echo "Updated";
            }
            //echo $_POST["fnamnamee"];
        }
    }


    public function d_board()
    {
        echo view("admin/Dbord/dash_board.php");
    }

    public function user()
    {

        //$user = new user();
        //$data['user'] = $user->findAll();
        echo view("admin/users/user.php");
    }
    public function student()
    {

        //$user = new user();
        //$data['user'] = $user->findAll();
        echo view("admin/student/student.php");
    }

    public function notice()
    {

        $notice = new notice_model();
        $data['notice'] = $notice->findAll();
        echo view("admin/Notices/notices.php", $data);
        // $products = new products();
        // $data['products'] = $products->findAll();
        // echo view("admin/gallery/gallery.php",$data);
    }


    public function gallery()
    {

        $products = new products();
        $data['products'] = $products->findAll();
        echo view("admin/gallery/gallery.php", $data);
    }
    public function create()
    {

        echo view("admin/gallery/create.php");
    }

    public function store()
    {

        $product = new products();

        $data = [
            'Image_id' => $this->request->getPost('Image_id'),
            'Image_name' => $this->request->getPost('Image_name'),
            'Date' => $this->request->getPost('Date'),
            'time' => $this->request->getPost('time')
            //'image'=>$imageName,


        ];
        if ($product->Save($data)) {


            echo "successfully added";
        }
    }
    public function uploadImage()
    {
        if (isset($_POST['submit'])) {
            $obj_image = new image_model();
            $iName = $this->request->getVar('Image_name');
            $upDate = $this->request->getVar('upDate');
            $upTime = $this->request->getVar('upTime');
            $file = $this->request->getFile('ImageUp');

            if ($file->isValid()) {
                $imgName = $file->getRandomName();
                //$file->move('profile/',$imgName);
                $file->move('assets/images/Profiles/SubWarden/', $imgName);
                $data = array(
                    'Image_name' => $imgName,
                    'image_path' => $imgName,
                    'Date' => $upDate,
                    'time' => $upTime
                );
                $re = $obj_image->save($data);
                if ($re) {
                    //echo "updated";
                    //redirect('/');
                    echo "Uploaded";
                }
                //echo $user;

            } else {
                echo "<script>alert('Cannot upload the image')</script>";
            }
        }
    }
    public function addImage()
    {
        if (isset($_POST['submit'])) {
            $output = '';
            $product = new image_model();
            $name = $this->request->getVar("name");
            $file = $this->request->getFile('image');
            $date = date('Y-m-d');
            $time = date('H:i:s');
            if ($file->isValid()) {
                $imgName = $file->getRandomName();
                //$file->move('profile/',$imgName);
                $file->move('assets/images/Profiles/SubWarden/', $imgName);
                $dataSave = array(
                    'Image_name' => $imgName,
                    'Date' => $date,
                    'time' => $time,
                    'image_path' => $imgName
                );
                $result = $product->save($dataSave);
                if ($result) {
                    return "OK";
                } else {
                    return "NOT OK";
                }
                echo "OK S";
            } else {
                echo "OK V";
                echo "<script>alert('Cannot update the image')</script>";
                //return redirect()->to('SubWarden_dashboard');
            }
        }
    }

    public function complaints()
    {
        $complaints = new complaints_model();
        $data['complaints'] = $complaints->findAll();
        //echo view("admin/Notices/notices.php",$data);
        echo view("admin/complaints/complaints.php", $data);
    }

    public function edit($Image_id)
    {
        $products = new products();
        $data['product'] = $products->find($Image_id);
        return view('admin/gallery/edit', $data);
    }
    public function delete($Image_id)
    {
        $products = new products();
        $data = $products->find($Image_id);
        $imagefile = $data['Image_name'];
        if (file_exists($imagefile)) {
            unlink($imagefile);
        }
        $products->delete($Image_id);
        return redirect()->back()->with('status', 'image data deleted');
        //alert("data deleted");
    }

    function getData()
    {
        $output = '';
        $obj_dean = new model_dean();
        $user = $this->request->getVar("user");
        switch ($user) {
            case 'dean':
                $output .= '
                <thead>  
                    <tr>  
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Qualification</th>  
                        <th>Action</th>
                       

                    </tr>  
                </thead>
                ';

                $result = $obj_dean->findAll();
                foreach ($result as $row) {
                    $output .= '
                    <tbody>
                        <tr>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['contact_no'] . '</td> 
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['DOB'] . '</td>
                            <td>' . $row['Qualification'] . '</td>
                            <td>
                            <i type="button" class="fas fa-trash" onclick="deleteUser(this.id)" style="color:red"></i>
                        </td>
                       

                            
                       
                            </tr>
                    </tbody>
                    ';
                }
                break;
            case 'warden':
                $output .= '
                <thead>  
                    <tr>  
                    <th>user_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date_Joined</th> 
                        <th>Qualification</th>
                        <th>Action</th>
                        
                      

                    </tr>  
                </thead>
                ';
                $obj_war = new model_warden();
                $result = $obj_war->findAll();
                foreach ($result as $row) {
                    $output .= '
                    <tbody>
                        <tr>
                            <td>' . $row['user_id'] . '</td>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['contact_no'] . '</td> 
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['DOB'] . '</td>
                            <td>' . $row['Date_Joined'] . '</td>
                            <td>' . $row['Qualification'] . '</td>
                            
                            <td>
                                <i type="button" class="fas fa-trash" id="' . $row['user_id'] . '" onclick="deleteUser(this.id)" style="color:red"></i>
                            </td>
                        </tr>
                    </tbody>
                    ';
                }
                break;
                //return("warden");

            case 'subwarden':
                $output .= '
                <thead>  
                    <tr>  
                    <th>user_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date_Joined</th> 
                        <th>Action</th>  

                        
                    </tr>  
                </thead>
                ';
                $obj_subwar = new model_subwarden();
                $result = $obj_subwar->findAll();
                foreach ($result as $row) {
                    $output .= '
                    <tbody>
                        <tr>
                        <td>' . $row['user_id'] . '</td>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['contact_no'] . '</td> 
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['DOB'] . '</td>
                            <td>' . $row['Date_Joined'] . '</td>
                            <td>
                             <i type="button" class="fas fa-trash" id="' . $row['user_id'] . '" onclick="deleteUserSw(this.id)" style="color:red"></i>
                            </td>
                        </tr>
                    </tbody>
                    ';
                }

                //return("subwarden");
                break;
            case 'security':
                $output .= '
                <thead>  
                    <tr>  
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date Joined</th> 
                        <th>Action</th>  
 
                    </tr>  
                </thead>
                ';
                $obj_sec = new Security_model();
                $result = $obj_sec->findAll();
                foreach ($result as $row) {
                    $output .= '
                    <tbody>
                        <tr>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['contact_no'] . '</td> 
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['DOB'] . '</td>
                            <td>' . $row['Date_Joined'] . '</td>
                            <td>
                            <i type="button" class="fas fa-trash"  onclick="deleteUser(this.id)" style="color:red"></i>
                        </td>
                       
                        </tr>
                    </tbody>
                    ';
                }
                break;
            case 'student':

                $output .= '
               
                <thead> 
                    <tr>  
                    <th>student_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>DOB</th> 
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>department</th> 
                        <th>nic_number</th>
                        <th>Action</th>
                        
                       

                
                    </tr>  
                </thead>
                ';
                $obj_stu = new student_model();
                $result = $obj_stu->findAll();
                foreach ($result as $row) {
                    $output .= '
                    <tbody>
                        <tr>
                            <td>' . $row['student_id'] . '</td>
                            <td>' . $row['first_name'] . '</td>
                            <td>' . $row['last_name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>' . $row['DOB'] . '</td>
                            <td>' . $row['contact_no'] . '</td> 
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['department'] . '</td>
                            <td>' . $row['nic_number'] . '</td>
                            <td>
                                <i type="button" class="fas fa-trash" id="' . $row['student_id'] . '" onclick="deleteUser(this.id)" style="color:red"></i>
                            </td>
                           
                        </tr>
                    </tbody>
                    ';
                }
                break;
                // return("student");

        }
        return $output;
    }
    // public function delete_notice($notice_id){
    //     $notice= new notice_model();
    //     $data = $notice->find($notice_id);
    //     echo $data['owner'];
    //     // $noticefile= $data['date'];
    //     // if (file_exists($noticefile))
    //     // {
    //     //     unlink($noticefile);


    //     // }
    //     // $products->notice_delete($notice_id);
    //     // return redirect()->back()->with('status','notice data deleted');

    // }

    public function addStudent()
    {
        
        $obj_stu_mem = new student_member_model();
        $obj_user= new model_users();
        $output = '';
        $stid = $this->request->getVar('stid');
        $fname = $this->request->getVar('fname');
        $lname = $this->request->getVar('lname');
        $gender = $this->request->getVar('gender');
        $dob = $this->request->getVar('dob');
        $cont = $this->request->getVar('cont');
        $dep = $this->request->getVar('dep');
        $level = $this->request->getVar('level');
        $address = $this->request->getVar('address');
        $nic = $this->request->getVar('nic');
        $email = $this->request->getVar('email');
       //  echo $stid;
        $data = array(
            'student_id' => $stid,
            'first_name' => $fname,
            'last_name' => $lname,
            'gender' => $gender,
            'address' => $address,
            'DOB' => $dob,
            'contact_no' => $cont,
            'email' => $email,
            'department' => $dep,
            'nic_number' => $nic,
            'pro_pic' => "sample",
            'level' => $level,
            'RegEndDate' => $dob
        );
       

           

        $dataUser=array(
            'user_id'=>$stid,
            'user_name'=>$fname,
            'password'=>md5("123"),
            'post'=>"student"
        );

         $re = $obj_stu_mem->save($data);

        $obj_user->save($dataUser);
        $output .="Student Added";
        return $output;
    }


    public function EditImage()
    {
        $obj_gallery = new image_model();
        $output = '';
        $id = $this->request->getVar('id');
        $re = $obj_gallery->where('Image_id', $id)->findAll();
        if ($re) {
            foreach ($re as $row) {
                $output .= '
                    <div class="form-group">
                    <label for="exampleInputImage_name">Image_name</label>
                    <input type="text" class="form-control" id="Image_namee" aria-describedby="Image_name" value=' . $row['Image_name'] . '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDate">Date</label>
                    <input type="date" class="form-control" id="Date" aria-describedby="Date" value=' . $row['Date'] . '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtime">time</label>
                    <input type="time" class="form-control" id="time" aria-describedby="time" value=' . $row['time'] . '>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputimage">image</label>
                    <input type="text" class="form-control" id="image" aria-describedby="image" value=' . $row['image_path'] . '>
                  </div>
                    
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="' . $row['Image_id'] . '" onclick="updateImages(this.id)" name="">Update changes</button>
      </div>
                    ';
            }
        }
        return $output;
    }
    public function updateImage()
    {

        $obj_gallery = new image_model();
        $name = $this->request->getVar('imageName');
        $date = $this->request->getVar('date');
        $time = $this->request->getVar('time');
        $file = $this->request->getVar('image');
        $id = $this->request->getVar('id');
        $data = array(
            'Image_id' => $id,
            'Image_name' => $name,
            'Date' => $date,
            'time' => $time,
            'image' => $file
        );
        $re = $obj_gallery->where('Image_id', $id)->set($data)->update();
        if ($re) {
            return "Updated";
        } else {
            "Not updated";
        }
    }

    public function chatbot()
    {
        echo view("admin/chatbot/chatbot.php");
    }

    public function dean()
    {
        echo view("admin/users/dean.php");
    }

    public function deleteWardenUser()
    {
        $output = '';
        $user = $this->request->getVar('user');
        $obj_warden = new model_warden();
        $result = $obj_warden->where('user_id', $user)->delete();
        if ($result) {
            $output .= 'Deleted the user';
        } else {
            $output .= 'Cannot delete the user';
        }
        return $output;
    }

    public function deleteSubWardenUser()
    {
        $output = '';
        $user = $this->request->getVar('user');
        $obj_swarden = new model_subwarden();
        $result = $obj_swarden->where('user_id', $user)->delete();
        if ($result) {
            $output .= 'Deleted the user';
        } else {
            $output .= 'Cannot delete the user';
        }
        return $output;
    }
}
