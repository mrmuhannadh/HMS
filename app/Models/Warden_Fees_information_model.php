<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Warden_Fees_information_model extends Model{
        protected $table="student_fee";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','paid_amount','paid_date','branch','receipt','academic_year'];
    }
?>