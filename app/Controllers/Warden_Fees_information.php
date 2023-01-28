<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\Warden_Fees_information_model;
use App\Models\Warden_Fine_model;
use App\Models\student_model;

use App\Models\student_member_model;

class Warden_Fees_information extends BaseController
{

    public function war_hos_fees()
    {

        echo view("Warden/Fees/hostelfee_Detail.php");
    }

    public function notPaid()
    {
        $output = '';
        $fYr = '600';
        $tYr = '2400';
        $fee = "";
        $yr = $this->request->getVar("year");
        $db = \Config\Database::connect();
        $q = $db->query('select * from student_member where level=' . $yr . ' and student_id not in(select student_id from student_fee);');
        $r = $q->getResultArray();
        if ($yr == 2 || $yr == 3) {
            $fee = $tYr;
        } else {
            $fee = $fYr;
        }
        foreach ($r as $row) {
            $output .= '
                        
                        <tr>
                            <td>' . $row['student_id'] . '</td>
                            <td>' .
                $fee
                . '</td>
                            <td><input type="button" id=' . $row['student_id'] . ' class="btn btn-success" name="NOTIFY" value="NOTIFY" onclick="notifyunpaid(this.id,' . $fee . ')"></td>
                        
                        </tr>
                        
                        ';
        }
        return $output;
    }

    public function payFee()
    {
        $output = '';
        $id = $this->request->getVar('id');
        $amount = $this->request->getVar('amount');
        $date = $this->request->getVar('date');
        $branch = $this->request->getVar('branch');
        $yr = $this->request->getVar('ye');
        $r = 'Test';
        $data = [
            'student_id' => $id,
            'paid_amount' => $amount,
            'paid_date' => $date,
            'branch' => $branch,
            'receipt' => $r,
            'academic_year' => $yr
        ];
        $obj_fee = new Warden_Fees_information_model();
        $re = $obj_fee->save($data);
        if ($re) {
            $output .= 'Paid Fee Added';
        }
        return $output;
    }
    public function notPaidsms()
    {
        $tg = $this->request->getVar("tg");
        $fee = $this->request->getVar("fee");
        $obj_student = new student_member_model;

        $s_details = $obj_student->where('student_id', $tg)->find();
        foreach ($s_details as $d) {
            $mobile = $d['contact_no'];
        }



        $MSISDN = $mobile;
        $SRC = "SendTest";


        $MESSAGE = "you need to pay hostel fee " . $fee;
        $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd";  //Replace your Access Token


        $msgdata = array("recipient" => $MSISDN, "sender_id" => $SRC, "message" => $MESSAGE);



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

        $err = curl_exec($curl);
        if ($err) {
            echo '<script>alert("Message is not send"." $err");</script>';
        } else {
            echo '<script>alert("Message is sent");</script>';
        }
    }



    public function getData()
    {
        $output = '';
        $type = $this->request->getVar("type");
        switch ($type) {
            case 'fees_paid':

                $output .= '
            <thead>
            <tr>
                <th>Registration Number</th>
                <th>Paid amount</th>
                <th>Paid Date</th>
                <th>Branch</th>
                <th>image</th>
                
            
            </tr>  
        </thead>
            ';
                $obj_paid = new Warden_Fees_information_model();
                $result = $obj_paid->findAll();
                foreach ($result as $row) {
                    $output .= '
                            <tbody>     
                                <tr>
                                    <td>' . $row['student_id'] . '</td>
                                    <td>' . $row['paid_amount'] . '</td>
                                    <td>' . $row['paid_date'] . '</td>
                                    <td>' . $row['branch'] . '</td>
                                    <td>' . $row['receipt'] . '</td>
                                </tr>
                            </tbody>
                        
                            
                            ';
                }
                return $output;
                break;
        }
    }

    public function fees_info()
    {

        //student_id,gender,room_no,floor_no,reason,date,time
        $special = new Warden_Fees_information_model();
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'paid_amount' => $this->request->getPost('paid_amount'),
            'paid_date' => $this->request->getPost('paid_date'),

            'branch' => $this->request->getPost('branch'),
            'image' => $this->request->getPost('image')

        ];
        $special->save($data);


        echo view("Warden/Fees/hostelfee_Detail.php");
    }

    public function fine_info()
    {
        $mobile = null;
        $obj_student = new student_member_model;
        $tg = $this->request->getPost('student_id');
        $this->request->getPost('student_id');
        $s_details = $obj_student->where('student_id', $tg)->findAll();

        foreach ($s_details as $d) {
            $mobile = $d['contact_no'];
        }


        $MSISDN = $mobile;
        $SRC = "SendTest";

        $type = $this->request->getPost('Furniture_type');
        $amount = $this->request->getPost('fine_amount');

        $MESSAGE = "you need to pay " . $amount . " for demage " . $type;
        $AUTH = "690|BDCgegk0xDaue38BzKOc3x4vTL3N8hfhni5sCkHd";   //Replace your Access Token


        $msgdata = array("recipient" => $MSISDN, "sender_id" => $SRC, "message" => $MESSAGE);



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
        } else {
            echo '<script>alert("Message is sent");</script>';
        }
        echo  "<script type='text/javascript'>";
        echo "window.close();";
        echo "</script>";
    }
}
