<?php

namespace App\Controllers;

use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\Student_MedicalReq_model;
use App\Models\student_model;
use App\Models\Student_RoomChange_model;
use App\Models\model_subwarden;
use App\Models\out_request_Model;
use App\Models\Student_Furniture_model;



class SubWarden_Request extends BaseController
{
    public function index()
    {
        echo view('SubWarden/Requests/request.php');
    }
    //medical request
    //get medical requests
    public function getMed_Request()
    {
        $output = '';
        $obj_med = new Student_MedicalReq_model();
        foreach (($result = $obj_med->findAll()) as $row) {


            $output .= '
                <tr >
                    <td>' . $row['leave_date'] . '</th>
                    <td>' . $row['leave_time'] . '</td>
                    <td>' . $row['reg_no'] . '</td>
                    <td>' . $row['medical_issue'] . '</td>
                    <td>' . $row['takecareperson_tgno'] . '</td> 
                    <td>' . $row['takecareperson_name'] . '</td>      
                    <td>' . $row['takecareperson_contactno'] . '</td>      
                    <td ><div id="' . $row['reg_no'] . '" type="button"  onclick="myFunctionUser(this.id)" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user"></i></div></td>              
                </tr> 
            ';
        }

        return $output;
    }
    public function getMore()
    {
        $output = "";
        $obj_student = new student_model();
        $st_id = $this->request->getVar('student_id');
        $result = $obj_student->where('student_id', $st_id)->findAll();
        foreach ($result as $row) {
            // return $row['first_name'];

            $output = '
        
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img id="imm" src="assets/images/Profiles/Student/' . $row['pro_pic'] . ' ">
                        
                    </div>
                    <div class="col-md-7 det">
                        <div class="row">
                            <div class="col-md">
                                <h2>NAME</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <h2>' . $row['first_name'] . '</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <h4>Department: ' . $row['department'] . ' </h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
               

                <div style="padding-top:20px;padding-left:70px;display:none" id="moreDet">
                    <div class="row">
                        <div class="col-md-5">
                            <b>FULL NAME</b>
                        </div>
                        <div class="col-md-7">
                        ' . $row['first_name'] . ' ' . $row['last_name'] . '
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>EMAIL</b>
                        </div>
                        <div class="col-md-7">
                         ' . $row['email'] . '
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>PHONE</b>
                        </div>
                        <div class="col-md-7">
                         ' . $row['contact_no'] . '
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>ADDRESS</b>
                        </div>
                        <div class="col-md-7">
                         ' . $row['address'] . '
                        </div>
                    </div>
                    <div class="row dep">
                        <div class="col-md-5">
                            <b>NIC</b>
                        </div>
                        <div class="col-md-7">
                         ' . $row['nic_number'] . '
                        </div>
                    </div>
                </div>
            </div>
        ';
        }
        return $output;
    }

    public function RequestResponce()
    {
        $MESSAGE = "";
        $output = '';
        $obj_subwarden = new model_subwarden();
        $out_request = new out_request_Model();
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $user = $this->request->getVar('user');
        if ($status == 1) {
            $MESSAGE .= "You are allowed to leave the Hostel";
        }
        if ($status == -1) {
            $MESSAGE .= "You are not allowed to leave the Hostel, Check your HMS for conformation";
        }
        $data = array(
            'Status' => $status
        );
        $reUp = $out_request->where('req_id', $id)->set($data)->update();
        if ($reUp) {

            $re = $obj_subwarden->where('user_id', $user)->findAll();
            foreach ($re as $r) {
                $gender = $r['gender'];
                if ($gender == "male") {

                    $student_room = new boys_hostel();

                    $result = $out_request->orderBy('req_id', 'DESC')->findAll();
                    foreach ($result as $row) {
                        $roomResult = $student_room->where('student_id', $row['reg_no'])->findAll();
                        $st_room = '';
                        $st_id = '';
                        foreach ($roomResult as $rRow) {
                            $st_room = $rRow['room_no'];
                            $st_id = $rRow['student_id'];
                        }
                        if ($row['reg_no'] == $st_id) {
                            $output .= '
                            <tr>
                                
                                <td>' . $row['reg_no'] . '</td>
                                <td>' . $st_room . '</td>
                                <td>' . $row['leave_date'] . '</td>
                                <td>' . $row['leave_time'] . '</td>
                                <td>' . $row['reason'] . '</td>
                                <td>
                                ';
                            if ($row['Status'] == 0) {
                                $output .= '
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-success"  id=' . $row['req_id'] . ' onclick="acceptFun(this.id)" >OK</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-danger"  id=' . $row['req_id'] . ' onclick="rejectFun(this.id)" >X</button>
                                            </div>
                                        </div>
                                    ';
                            } else if ($row['Status'] == 1) {
                                $output .= '
                                        <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                                    ';
                            } else if ($row['Status'] == -1) {
                                $output .= '
                                        <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                                    ';
                            }

                            $output .= '
                                </td>
                            </tr>
                        ';
                        }
                    }
                } else if ($gender == "female") {
                    $student_room = new girls_hostel();

                    $result = $out_request->orderBy('req_id', 'DESC')->findAll();
                    foreach ($result as $row) {
                        $roomResult = $student_room->where('student_id', $row['reg_no'])->findAll();
                        $st_room = '';
                        $st_id = '';
                        foreach ($roomResult as $rRow) {
                            $st_room = $rRow['room_no'];
                            $st_id = $rRow['student_id'];
                        }
                        if ($row['reg_no'] == $st_id) {
                            $output .= '
                            <tr>
                                
                                <td>' . $row['reg_no'] . '</td>
                                <td>' . $st_room . '</td>
                                <td>' . $row['leave_date'] . '</td>
                                <td>' . $row['leave_time'] . '</td>
                                <td>' . $row['reason'] . '</td>
                                <td>
                                ';
                            if ($row['Status'] == 0) {
                                $output .= '
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-success"  id=' . $row['req_id'] . ' onclick="acceptFun(this.id)" >OK</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-danger"  id=' . $row['req_id'] . ' onclick="rejectFun(this.id)" >X</button>
                                            </div>
                                        </div>
                                    ';
                            } else if ($row['Status'] == 1) {
                                $output .= '
                                        <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                                    ';
                            } else if ($row['Status'] == -1) {
                                $output .= '
                                        <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                                    ';
                            }

                            $output .= '
                                </td>
                            </tr>
                        ';
                        }
                    }
                }
            }
            $MSISDN = "0754092934";
            $SRC = "SendTest";

            $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd";  //Replace your Access Token

            $msgdata = array("recipient" => $MSISDN, "sender_id" => $SRC, "message" => $MESSAGE);



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

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }
        }

        return $output;
        //return $status;
    }

    public function getLeave_Request()
    {
        $output = '';
        $out_request = new out_request_Model();
        $obj_subwarden = new model_subwarden();
        $user = $this->request->getVar('user');
        $re = $obj_subwarden->where('user_id', $user)->findAll();
        foreach ($re as $r) {
            $gender = $r['gender'];
            if ($gender == "male") {

                $student_room = new boys_hostel();

                $result = $out_request->orderBy('req_id', 'DESC')->findAll();
                foreach ($result as $row) {
                    $roomResult = $student_room->where('student_id', $row['reg_no'])->findAll();
                    $st_room = '';
                    $st_id = '';
                    foreach ($roomResult as $rRow) {
                        $st_room = $rRow['room_no'];
                        $st_id = $rRow['student_id'];
                    }
                    if ($row['reg_no'] == $st_id) {
                        $output .= '
                        <tr>
                            
                            <td>' . $row['reg_no'] . '</td>
                            <td>' . $st_room . '</td>
                            <td>' . $row['leave_date'] . '</td>
                            <td>' . $row['leave_time'] . '</td>
                            <td>' . $row['reason'] . '</td>
                            <td>
                            ';
                        if ($row['Status'] == 0) {
                            $output .= '
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success"  id=' . $row['req_id'] . ' onclick="acceptFun(this.id)" >OK</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger"  id=' . $row['req_id'] . ' onclick="rejectFun(this.id)" >X</button>
                                        </div>
                                    </div>
                                ';
                        } else if ($row['Status'] == 1) {
                            $output .= '
                                    <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                                ';
                        } else if ($row['Status'] == -1) {
                            $output .= '
                                    <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                                ';
                        }

                        $output .= '
                            </td>
                        </tr>
                    ';
                    }
                }
            } else if ($gender == "female") {
                $student_room = new girls_hostel();

                $result = $out_request->orderBy('req_id', 'DESC')->findAll();
                foreach ($result as $row) {
                    $roomResult = $student_room->where('student_id', $row['reg_no'])->findAll();
                    $st_room = '';
                    $st_id = '';
                    foreach ($roomResult as $rRow) {
                        $st_room = $rRow['room_no'];
                        $st_id = $rRow['student_id'];
                    }
                    if ($row['reg_no'] == $st_id) {
                        $output .= '
                        <tr>
                            
                            <td>' . $row['reg_no'] . '</td>
                            <td>' . $st_room . '</td>
                            <td>' . $row['leave_date'] . '</td>
                            <td>' . $row['leave_time'] . '</td>
                            <td>' . $row['reason'] . '</td>
                            <td>
                            ';
                        if ($row['Status'] == 0) {
                            $output .= '
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success"  id=' . $row['req_id'] . ' onclick="acceptFun(this.id)" >OK</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger"  id=' . $row['req_id'] . ' onclick="rejectFun(this.id)" >X</button>
                                        </div>
                                    </div>
                                ';
                        } else if ($row['Status'] == 1) {
                            $output .= '
                                    <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                                ';
                        } else if ($row['Status'] == -1) {
                            $output .= '
                                    <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                                ';
                        }

                        $output .= '
                            </td>
                        </tr>
                    ';
                    }
                }
            }
        }
        return $output;
    }
    public function room_request()
    {
        $output = '';
        $user = $this->request->getVar('user');
        $request = $this->request->getVar('request');
        $obj_subwarden = new model_subwarden();
        //get the gender of subwarden
        $re = $obj_subwarden->where('user_id', $user)->findAll();
        foreach ($re as $row) {
            $gender = $row['gender'];
            if ($gender == "male") {
                if ($request == "roomChange") {
                    $obj_RC = new Student_RoomChange_model();
                    $reS = $obj_RC->where('gender', $gender)->findAll();
                    $output .= '
                    
                    <thead class="thead-dark" style="background-color:black;color:white">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Floor No</th>
                            <th scope="col">Reason</th>  
                            <th scope="col" colspan="2">Action</th> 
                        </tr>
                    </thead>
                    ';
                    foreach ($reS as $req) {
                        $output .= '
                            <tr>
                                <td>' . $req['date'] . '</td>
                                <td>' . $req['time'] . '</td>
                                <td>' . $req['student_id'] . '</td>
                                <td>' . $req['room_no'] . '</td>
                                <td>' . $req['floor_no'] . '</td>
                                <td>' . $req['reason'] . '</td>
                                <td id="' . $req['student_id'] . '" data-toggle="modal" data-target="#ModalChangeRoom" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-check-circle" type="button" style="color:green;font-size:1em"></i></td>
                                <td id="' . $req['student_id'] . '" onclick="myFunctionRoomDelete(this.id)" ><i class="fas fa-minus-circle" type="button" style="color:red;font-size:1em"></i></td>
                            </tr>
                        ';
                    }

                    return $output;
                } else if ($request == "repair") {
                    $obj_reqRes = new Student_Furniture_model();
                    $res = $obj_reqRes->findAll();
                    $output .= '
                    
                    <thead class="thead-dark" style="background-color:black;color:white;">
                        <tr>
                        <th scope="col">Date</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    ';
                    foreach ($res as $req) {
                        $output .= '
                            <tr>
                            <td>' . $req['date'] . '</td>
                            <td>' . $req['student_id'] . '</td>
                            <td>' . $req['room_no'] . '</td>
                            <td>' . $req['furniture_type'] . '</td>   
                            </tr>
                        ';
                    }
                    return $output;
                } else if ($request == "furniture") {
                    return ("male furniture");
                }
            } else if ($gender == "female") {
                if ($request == "roomChange") {
                    $obj_RC = new Student_RoomChange_model();
                    $reS = $obj_RC->where('gender', $gender)->findAll();
                    $output .= '
                    
                    <thead class="thead-dark" style="background-color:black;color:white">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Floor No</th>
                            <th scope="col">Reason</th>  
                            <th scope="col" colspan="2">Action</th> 
                        </tr>
                    </thead>
                    ';
                    foreach ($reS as $req) {
                        $output .= '
                            <tr>
                                <td>' . $req['date'] . '</td>
                                <td>' . $req['time'] . '</td>
                                <td>' . $req['student_id'] . '</td>
                                <td>' . $req['room_no'] . '</td>
                                <td>' . $req['floor_no'] . '</td>
                                <td>' . $req['reason'] . '</td>
                                <td id="' . $req['student_id'] . '" data-toggle="modal" data-target="#ModalChangeRoom" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-check-circle" type="button" style="color:green;font-size:1em"></i></td>
                                <td id="' . $req['student_id'] . '" onclick="myFunctionRoomDelete(this.id)" ><i class="fas fa-minus-circle" type="button" style="color:red;font-size:1em"></i></td>
                            </tr>
                        ';
                    }

                    return $output;
                } else if ($request == "repair") {
                    $obj_reqRes = new Student_Furniture_model();
                    $res = $obj_reqRes->findAll();
                    $output .= '
                    
                    <thead class="thead-dark" style="background-color:black;color:white;">
                        <tr>
                        <th scope="col">Date</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    ';
                    foreach ($res as $req) {
                        $output .= '
                            <tr>
                            <td>' . $req['date'] . '</td>
                            <td>' . $req['student_id'] . '</td>
                            <td>' . $req['room_no'] . '</td>
                            <td>' . $req['furniture_type'] . '</td>   
                            </tr>
                        ';
                    }
                    return $output;
                } else if ($request == "furniture") {
                    return ("female furniture");
                }
            }
        }
    }
    public function roomChangeModal()
    {
        $output = '';
        $gen = $this->request->getVar('gen');
        $student = $this->request->getVar('id');
        $obj_RC = new Student_RoomChange_model();
        $A_room = '';
        $A_floor = '';
        if ($gen == "male") {
            $obg_boys = new boys_hostel();
            $result = $obg_boys->where('student_id', $student)->findAll();
            foreach ($result as $r) {
                $A_room = $r['room_no'];
                $A_floor = $r['floor'];
            }
        } else if ($gen == "female") {
            $obg_girls = new girls_hostel();
            $result = $obg_girls->where('student_id', $student)->findAll();
            foreach ($result as $r) {
                $A_room = $r['room_no'];
                $A_floor = $r['floor'];
            }
        }
        $result = $obj_RC->where('student_id', $student)->findAll();
        foreach ($result as $row) {
            if (($row['room_no'] == $A_room) && ($row['floor_no'] == $A_floor)) {
                $output .= '
                <div class="row">
                    <div class="container">
                        <form method="post">
                            <div class="row text-center">
                                <div class="col-md-12" style="font-weight:bold">
                                    STUDENT ID : ' . $student . '
                                </div>
                                <input type="hidden" value=' . $student . ' id="studentID">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    FLOOR
                                </div>
                                <div class="col-md-6">
                                    <input type="number" max="4" min="1" id="newFloor" class="form-control" value="' . $row['floor_no'] . '">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    ROOM
                                </div>
                                <div class="col-md-6">
                                    <input type="number" min="100" class="form-control" onChange="myFunctionS(this.value);" id="newRoom" value="' . $row['room_no'] . '">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="roomMem"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top:10px;">
                        <div class="input-group-text" type="submit" name="send" id="postNotice" onclick="myFunChangeRoom()">
                            <span  style="margin-left:40%;" >CHANGE ROOM</span>
                        </div>
                    </div>
                </div>
                </div>
                ';
            } else {
                $output = '
                    The Request is wrong with present Room or Present Floor
                ';
            }
        }

        return $output;
    }
    public function getRoomMemBoys()
    {
        $room = $this->request->getVar('room');
        $obj_boys_hostel = new boys_hostel();
        $result = $obj_boys_hostel->where('room_no', $room)->findAll();
        $countRe = count($result);
        if ($countRe == 0) {
            $output = '<span>There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 1) {
            $output = '<span style="color:blue" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 2) {
            $output = '<span style="color:green" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 3) {
            $output = '<span style="color:brown" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 4) {
            $output = '<span style="color:red" class="myAlert alertDanger">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        }

        return $output;
    }
    public function getRoomMemGirls()
    {
        $room = $this->request->getVar('room');
        $obj_girls_hostel = new girls_hostel();
        $result = $obj_girls_hostel->where('room_no', $room)->findAll();
        $countRe = count($result);
        if ($countRe == 0) {
            $output = '<span>There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 1) {
            $output = '<span style="color:blue" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 2) {
            $output = '<span style="color:green" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 3) {
            $output = '<span style="color:brown" class="myAlert">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        } else if ($countRe == 4) {
            $output = '<span style="color:red" class="myAlert alertDanger">There are ' . $countRe . ' Students in the Room No: ' . $room . ' </span>';
        }

        return $output;
    }
    public function roomChange()
    {
        $output = '';
        $obj_RC = new Student_RoomChange_model();
        $gen = $this->request->getVar('gen');
        $student = $this->request->getVar('id');
        $floor = $this->request->getVar('floor');
        $room = $this->request->getVar('room');

        $data = array(
            'room_no' => $room,
            'floor' => $floor,
            'student_id' => $student
        );
        if ($gen == "male") {
            $obj_boys_hostel = new boys_hostel();
            $reUp = $obj_boys_hostel->where('student_id', $student)->set($data)->update();
            if ($reUp) {
                $reDel = $obj_RC->where('student_id', $student)->delete();
                if ($reDel) {
                    $reS = $obj_RC->where('gender', $gen)->findAll();
                    foreach ($reS as $req) {
                        $output .= '
                            <tr>
                                <td>' . $req['date'] . '</td>
                                <td>' . $req['time'] . '</td>
                                <td>' . $req['student_id'] . '</td>
                                <td>' . $req['room_no'] . '</td>
                                <td>' . $req['floor_no'] . '</td>
                                <td>' . $req['reason'] . '</td>
                                <td id="' . $req['student_id'] . '" data-toggle="modal" data-target="#ModalChangeRoom" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-check-circle" type="button" style="color:green;font-size:1em"></i></td>
                                <td id="' . $req['student_id'] . '"  onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-minus-circle" type="button" style="color:red;font-size:1em"></i></td>
                            </tr>
                        ';
                    }
                }
            }
        } else if ($gen == "female") {
            $obj_girls_hostel = new girls_hostel();
            $reUp = $obj_girls_hostel->where('student_id', $student)->set($data)->update();
            if ($reUp) {
                $reDel = $obj_RC->where('student_id', $student)->delete();
                if ($reDel) {
                    $reS = $obj_RC->where('gender', $gen)->findAll();
                    foreach ($reS as $req) {
                        $output .= '
                            <tr>
                                <td>' . $req['date'] . '</td>
                                <td>' . $req['time'] . '</td>
                                <td>' . $req['student_id'] . '</td>
                                <td>' . $req['room_no'] . '</td>
                                <td>' . $req['floor_no'] . '</td>
                                <td>' . $req['reason'] . '</td>
                                <td id="' . $req['student_id'] . '" data-toggle="modal" data-target="#ModalChangeRoom" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-check-circle" type="button" style="color:green;font-size:1em"></i></td>
                                <td id="' . $req['student_id'] . '"  onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-minus-circle" type="button" style="color:red;font-size:1em"></i></td>
                            </tr>
                        ';
                    }
                }
            }
        }
    }

    public function delChange()
    {
        $output = '';
        $obj_RC = new Student_RoomChange_model();
        $gen = $this->request->getVar('gen');
        $student = $this->request->getVar('id');
        $reDel = $obj_RC->where('student_id', $student)->delete();
        if ($reDel) {
            $reS = $obj_RC->where('gender', $gen)->findAll();
            foreach ($reS as $req) {
                $output .= '
                            <tr>
                                <td>' . $req['date'] . '</td>
                                <td>' . $req['time'] . '</td>
                                <td>' . $req['student_id'] . '</td>
                                <td>' . $req['room_no'] . '</td>
                                <td>' . $req['floor_no'] . '</td>
                                <td>' . $req['reason'] . '</td>
                                <td id="' . $req['student_id'] . '" data-toggle="modal" data-target="#ModalChangeRoom" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-check-circle" type="button" style="color:green;font-size:1em"></i></td>
                                <td id="' . $req['student_id'] . '" onclick="myFunctionRoomChange(this.id)" ><i class="fas fa-minus-circle" type="button" style="color:red;font-size:1em"></i></td>
                            </tr>
                        ';
            }
        }
    }
}
