<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class girls_hostel extends Model{
        protected $table="girls_hostel";
        //protected $primaryKey="";

        protected $allowedFields=['room_no','floor','student_id'];
    }
?>