<?php

namespace App\Controllers;

use App\Models\Complaints_Model;

$session = \Config\Services::session();
class Student_Complaint extends BaseController
{


    public function com()
    {
        $special = new Complaints_Model();
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $data = [

            'date' => $date,
            'time' => $time,
            'receiver' => $this->request->getPost('receiver'),
            'subject' => $this->request->getPost('subject'),
            'complaint' => $this->request->getPost('complaint'),


        ];
        if ($special->save($data)) {
            // return redirect()->to(base_url('Student/Request/Leave_request.php'))->with('status','Request Added sucessfully');
            echo '<script>alert("Complaint sent sucesssfuly ");</script>';
            echo '<script>history.go (-1);</script>';
            echo '<script>location.reload ();</script>';
        } else {
            echo "You request is not saved";
        }
    }
}
