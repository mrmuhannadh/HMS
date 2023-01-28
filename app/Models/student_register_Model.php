<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class student_register_Model extends Model{
        protected $table="student_register";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','name','room_no','defect/remark','gender','in_date','out_date','department','payment_dues'];
    }
?>