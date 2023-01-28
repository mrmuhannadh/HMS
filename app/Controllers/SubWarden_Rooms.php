<?php

namespace App\Controllers;

use App\Models\model_subwarden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_users;
use App\Models\student_member_model;
use App\Models\modal_stu_reg_limit;

class SubWarden_Rooms extends BaseController
{
    public function room()
    {
        echo view("SubWarden/Rooms/rooms.php");
    }
    function boys_list()
    {
        $output = '<option value="">SELECT STUDENT ID</option>';
        $obj_boys_hostel = new boys_hostel();
        $roomNo = $this->request->getVar('room_id');

        foreach (($result = $obj_boys_hostel->where('room_no', $roomNo)->findAll()) as $row) {
            $output .= '
                <option value=' . $row['student_id'] . ' name="tg" id="tg">' . $row['student_id'] . '</option> 
                ';
        }
        return $output;
    }
    function girls_list()
    {
        $output = '<option value="">SELECT STUDENT ID</option>';
        $obj_girls_hostel = new girls_hostel();
        $roomNo = $this->request->getVar('room_id');

        foreach (($result = $obj_girls_hostel->where('room_no', $roomNo)->findAll()) as $row) {
            $output .= '
            <option value=' . $row['student_id'] . ' name="tg" id="tg">' . $row['student_id'] . '</option> 
            ';
        }
        return $output;
    }

    //room management
    function fetch_data()
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

                <div style="padding-top:20px;padding-left:70px;display:none;" id="moreDet">
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
    function getRooms()
    {
        $output = '<option value="" id="selRoom">SELECT A ROOM</option>';

        $obj_boys_hostel = new boys_hostel();
        $floorNum = $this->request->getVar('floorNum');
        //$this->$obj_boys_hostel->distinct();
        $result = $obj_boys_hostel->where('floor', $floorNum)->findAll();
        //$results = array_unique($result);

        foreach ($result as $row) {
            $output .= '
            <option value=' . $row['room_no'] . '>' . $row['room_no'] . '</option> 
            ';
        }
        return $output;
    }
    public function fetch_gil_data()
    {
        $output = "";
        $obj_girls_hostel = new girls_hostel();
        $roomNum = $this->request->getVar('the_room');

        $result = $obj_girls_hostel->where('room_no', $roomNum)->findAll();

        foreach ($result as $row) {

            $output .= '
            
                <div class="form-check sTMem" id="stMem" for="' . $row['student_id'] . '"> 
                    <input type="checkbox" class="form-check-input cbox" style="margin-bottom:1em" id="' . $row['student_id'] . '" name="st_no" value="' . $row['student_id'] . '">
                    <label class="form-check-label labelCheck" for="' . $row['student_id'] . '" style="padding-left:50%;font-size:2em">' . $row['student_id'] . '</label>
                </div>
            ';
        }
        return $output;
    }

    public function fetch_bys_data()
    {
        $output = "";
        $obj_boys_hostel = new boys_hostel();
        $roomNum = $this->request->getVar('the_room');

        $result = $obj_boys_hostel->where('room_no', $roomNum)->findAll();

        foreach ($result as $row) {

            $output .= '
            
                <div class="form-check sTMem" id="stMem" for="' . $row['student_id'] . '"> 
                    <input type="checkbox" class="form-check-input cbox" style="margin-bottom:1em" id="' . $row['student_id'] . '" name="st_no" value="' . $row['student_id'] . '">
                    <label class="form-check-label labelCheck" for="' . $row['student_id'] . '" style="padding-left:50%;font-size:2em">' . $row['student_id'] . '</label>
                </div>
            ';
        }
        return $output;
    }
    public function changeRoomsBoys()
    {
        $output = "sdhgfdhfgtu";
        $obj_boys_hostel = new boys_hostel();
        $NewFloor = $this->request->getVar('newF');
        $NewRoom = $this->request->getVar('newR');
        $st1 = $this->request->getVar('st1');
        $st2 = $this->request->getVar('st2');
        $st3 = $this->request->getVar('st3');
        $st4 = $this->request->getVar('st4');
        $arr1 = "";
        $arr2 = "";
        $arr3 = "";
        $arr4 = "";

        //$output=$NewRoom+" "+$NewFloor;
        //taking the count of the new student details
        $count = 0;
        $arr1 = array(
            'room_no' => $NewRoom,
            'floor' => $NewFloor,
            'student_id' => $st1
        );
        if ($st1 != null) {
            $count += 1;
        }
        if ($st2 != null) {
            $count += 1;
        }
        if ($st3 != null) {
            $count += 1;
        }
        if ($st4 != null) {
            $count += 1;
        }

        //find weather how many students are already in the new room
        $result = $obj_boys_hostel->where('room_no', $NewRoom)->findAll();
        $countRe = count($result);

        //taking the total count to check weather it's less than 4
        $TotalCount = $count + $countRe;
        if ($TotalCount < 5) {
            $reDel = $obj_boys_hostel->where('student_id', $st1)->delete();
            if (!$reDel) {
                $output .= 'Cannot delete';
            }
            $reIn = $obj_boys_hostel->insert($arr1);

            if ($reIn) {
                $output .= '
                    ' . $count . ' Number of new Students have changed the room to ' . $NewRoom . '; 
                ';
            }
            } else {
             $output .= 'There are ' . $countRe . ' students have already registered in Room No: ' . $NewRoom . ' and you have selected ' . $count . ' new students Maximum only 4 Students';
        }

        return $output;
    }

    public function add_boys_list()
    {
        $output = '';
        $db = \Config\Database::connect();
        $q = $db->query('select * from student_member where gender="male" and student_id not in(select student_id from boys_hostel);');
        $r = $q->getResultArray();
        $output .= '<small id="emailHelp" class="form-text text-muted">Select student</small>';
        $output .= '<select class="form-control" id="stID">';

        foreach ($r as $row) {
            $output .= '
                        <option id=' . $row["student_id"] . ' value=' . $row["student_id"] . '>
                            ' . $row["student_id"] . ' Level-' . $row["level"] . '
                        </option>
                    ';
        }
        $output .= '</select>';
        return $output;
    }
    public function add_girls_list()
    {
        $output = '';
        $db = \Config\Database::connect();
        $q = $db->query('select * from student_member where gender="female" and student_id not in(select student_id from boys_hostel);');
        $r = $q->getResultArray();
        $output .= '<small id="emailHelp" class="form-text text-muted">Select student</small>';
        $output .= '<select class="form-control" id="stID">';

        foreach ($r as $row) {
            $output .= '
                        <option id=' . $row["student_id"] . ' value=' . $row["student_id"] . '>
                            ' . $row["student_id"] . ' Level-' . $row["level"] . '
                        </option>
                    ';
        }
        $output .= '</select>';
        return $output;
    }

    public function addStudentNew()
    {
        $output = '';
        $st_id = $this->request->getVar('st_id');
        $room = $this->request->getVar('room');
        $floor = $this->request->getVar('floor');
        $obj_boys_hostel = new boys_hostel();
        $result = $obj_boys_hostel->where('room_no', $room)->findAll();
        $countRe = count($result);

        if ($countRe == 4) {
            $output .= 'There are 4 students in this room: ' . $room . ' Floor: ' . $floor . '';
        } else {
            $data = array(
                'room_no' => $room,
                'floor' => $floor,
                'student_id' => $st_id
            );
            $reAddBoys = $obj_boys_hostel->insert($data);

            $output .= '' . $st_id . ' Added to room: ' . $room . ' Floor: ' . $floor . '';
        }
        return $output;
    }
    public function addGirlStudentNew()
    {
        $output = '';
        $st_id = $this->request->getVar('st_id');
        $room = $this->request->getVar('room');
        $floor = $this->request->getVar('floor');
        $obj_girls_hostel = new girls_hostel();
        $result = $obj_girls_hostel->where('room_no', $room)->findAll();
        $countRe = count($result);

        if ($countRe == 4) {
            $output .= 'There are 4 students in this room: ' . $room . ' Floor: ' . $floor . '';
        } else {
            $data = array(
                'room_no' => $room,
                'floor' => $floor,
                'student_id' => $st_id
            );
            $reAddBoys = $obj_girls_hostel->insert($data);
            if ($reAddBoys) {
                $output .= '' . $st_id . ' Added to room: ' . $room . ' Floor: ' . $floor . '';
            } else {
                $output .= '' . $st_id . ' Not Added to room: ' . $room . ' Floor: ' . $floor . '';
            }
        }
        return $output;
    }

    public function searchForAStu()
    {
        $output = '';
        $deta = $this->request->getVar('detail');
        $gender = $this->request->getVar('gender');
        $stu_mem_obj = new student_member_model();
        $result = $stu_mem_obj->where('gender', $gender)->findAll();
        foreach ($result as $row) {
            if (($row['first_name'] == $deta) || ($row['last_name'] == $deta) || ($row['student_id'] == $deta) || ($row['contact_no'] == $deta) || ($row['nic_number'] == $deta)) {
                $output = '
                <div class="row">
                <div class="col-md-11">
                <div class="container theDivForSearchData">
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
                   
                    <button onclick="showAllDataS()" class="btn btn-default">View More</button>
                    <div style="padding-top:20px;padding-left:70px;display:none" id="moreDetS">
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
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-md-1">
                    <button class="btn iconForMore"  style="display:none" id=' . $row['student_id'] . ' onclick="showMoreRoomMembers(id)" ><i class="fas fa-arrow-circle-right" aria-hidden="true"></i></button>
                    
                    </div>
                </div>
                </div>
                </div>
                
            ';
            }
        }
        return $output;
    }

    public function othersinRoom()
    {
        $output = '';
        $obj_stu_mem = new student_member_model();
        $stid = $this->request->getVar('id');
        $gender = $this->request->getVar('gender');
        $obj_room = '';
        $room = '';
        $floor = '';

        if ($gender == 'male') {
            $obj_room = new boys_hostel();
        } else {
            $obj_room = new girls_hostel();
        }
        $output .= '<table style="border-collapse:collapse;width:100%;border-spacing:15px" CELLSPACING=10 cellpadding=10> <form>';
        $result = $obj_room->where('student_id', $stid)->findAll();
        foreach ($result as $row) {
            $room = $row['room_no'];
            $floor = $row['floor'];
        }
        $re = $obj_room->where('room_no', $room)->findAll();
        $output .= '<h5>OTHERS IN FLOOR ' . $floor . ' ROOM NO ' . $room . '</h5>';


        foreach ($re as $r) {
            $result = $obj_stu_mem->where('student_id', $r['student_id'])->findAll();
            foreach ($result as $row) {
                if ($row['student_id'] == $stid) {
                    $phoneNo = $row['contact_no'];
                } else {
                    $output .= '<tr class="otherStudentsinRoom">
                    <td class="studentsCol text-center">
                        ' . $row['student_id'] . ' - ' . $row['first_name'] . '
                    </td>
                <tr>';
                }
                $output .= '               
                <input type="hidden" id="nameofstu" value="' . $row['first_name'] . ' ' . $row['last_name'] . '">
                <input type="hidden" id="idofStu" value="' . $stid. '">
                
            ';
            }
        }
        $output .= '</form></table>';
        $output .= '
                <div class="row " style="bottom:2%;position:absolute">
                    <button class="btn btn-primary" onclick="sendsmstoparents(' . $phoneNo . ',' . $room . ')">SEND DETAILS TO PARENTS</button>
                </div>
            ';
        return $output;
    }

    public function sendsmstoparents()
    {
        $output = '';
        $msg = '';
        $number = $this->request->getVar('parentNo');
        $room = $this->request->getVar('room');
        $gender = $this->request->getVar('gender');
        $stid = $this->request->getVar('stid');
        $obj_stu_mem = new student_member_model();
        $obj_room = '';
        $phoneNo='';
        if ($gender == 'male') {
            $obj_room = new boys_hostel();
        } else {
            $obj_room = new girls_hostel();
        }
        $msg .='Dear Guardient, Other students are in your childs room are';
        $re = $obj_room->where('room_no', $room)->findAll();
        foreach ($re as $r) {
            $result = $obj_stu_mem->where('student_id', $r['student_id'])->findAll();
            foreach ($result as $row) {
                if ($row['student_id'] == $stid) {
                    $phoneNo .= $row['contact_no'];
                } else {
                    $msg .= '
                        ' . $row['student_id'] . ' - ' . $row['first_name'] . ',
                   ';
                }
            }
        }
        $msg .='And the Room number is '.$room.' \nFrom,\nSub warden,\nFaculty of Technology,<br>University of Ruhuna';
            $MSISDN = $phoneNo;
            $SRC = "SendTest";
            
            $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd";  //Replace your Access Token

            $msgdata = array("recipient" => $MSISDN, "sender_id" => $SRC, "message" => $msg);

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

    public function getRegDate()
    {
        $output = '';
        $level = $this->request->getVar('level');
        $obj_model_reg = new modal_stu_reg_limit();
        $result = $obj_model_reg->where('level', $level)->findAll();
        foreach ($result as $r) {
            $output .= '
                <div class="container">
                    <small id="emailHelp" class="form-text text-muted">Select a End Date</small>
                    <input type="date" value=' . $r['end_date'] . ' id="endDate" class="form-control">
                    <div class="row">
                        <div class="col-md-12 my-2 d-flex justify-content-end">
                            <button class="btn btn-danger" type="reset">RESET</button>
                            &nbsp;
                            <button class="btn btn-primary" onclick="setDateLimit(' . $level . ')">SET</button>
                        </div>
                    </div>
                </div>
            ';
        }
        return $output;
    }

    public function setRegEndDate()
    {
        $output = '';
        $level = $this->request->getVar('level');
        $endD = $this->request->getVar('Enddate');
        $data = array(
            'level' => $level,
            'end_date' => $endD
        );
        $obj_model_reg = new modal_stu_reg_limit();
        $result = $obj_model_reg->where('level', $level)->set($data)->update();
        if ($result) {
            $output .= 'Date updated';
        } else {
            $output .= 'Date Not updated';
        }
        return $output;
    }
    public function getDetProgress(){
        $output='';
        $gen=$this->request->getVar('gen');
        $obj_hostel='';
        $totRooms=100;
        $totStu=400;
        $allocRooms=0;
        $allocStu=0;
        $db = \Config\Database::connect();
        $r='';
        if ($gen == 'male') {
            $q = $db->query('select count(distinct room_no) as Rooms, count(student_id) as Students from boys_hostel;');
            $r = $q->getResultArray();
        } else {
            $q = $db->query('select count(distinct room_no) as Rooms, count(student_id) as Students from girls_hostel;');
            $r = $q->getResultArray();
        }
        foreach($r as $row){
            $allocRooms=$row['Rooms'];
            $allocStu=$row['Students'];
        }
        $percRooms=(($totRooms*$allocRooms)/100);
        $percStudents=(100/($allocStu*$totStu));
        $output .='
        <div class="row d-flex justify-content-end">
          <div class="col-md-6">
            ALLOCATED ROOMS
            <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: '.$percRooms.'%;">
              '.$percRooms.'%
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row  d-flex justify-content-end">
          <div class="col-md-6">
            STUDENTS IN ROOMS
            <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: '.$percStudents.'%">
              '.$percStudents.'%
              </div>
            </div>
          </div>
        </div>
        ';
        return $output;
    }
}
