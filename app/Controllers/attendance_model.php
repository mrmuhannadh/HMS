<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class attendance_model extends Model{
        protected $table="attendance";
        protected $primaryKey="no";

        protected $allowedFields=['student_id','TimeIN','TimeOUT','no'];
    }
?>