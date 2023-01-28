<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Student_RoomChange_model  extends Model{
        protected $table="student_room_change";
        //protected $primaryKey="";

        protected $allowedFields=['student_id','gender','room_no','date','floor_no','time','reason'];
    }
?>