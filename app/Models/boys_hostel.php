<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class boys_hostel extends Model{
        protected $table="boys_hostel";
        protected $primaryKey="student_id";

        protected $allowedFields=['room_no','floor','student_id'];
    }
?>