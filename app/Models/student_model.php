<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class student_model extends Model{
        protected $table="student_member";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','first_name','last_name','gender','address','DOB','contact_no','email','department','nic_number','pro_pic'];
    }
?>