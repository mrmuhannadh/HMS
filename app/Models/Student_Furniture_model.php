<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Student_Furniture_model extends Model{
        protected $table="student_furniture_request";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','room_no','furniture_type','date'];
        	

    }
?>