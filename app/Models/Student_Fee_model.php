<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Student_Fee_model extends Model{
        protected $table="student_fee";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','paid_amount','paid_date','branch','receipt'];
    }
?>