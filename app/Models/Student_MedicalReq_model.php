<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Student_MedicalReq_model  extends Model{
        protected $table="medical_request";
        //protected $primaryKey="";

        protected $allowedFields=['reg_no','contact_no','medical_issue','takecareperson_name','takecareperson_tgno','takecareperson_contactno','leave_date','leave_time'];
    }
?>