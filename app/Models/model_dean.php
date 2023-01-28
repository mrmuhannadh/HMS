<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_dean extends Model{
        protected $table="dean";
        protected $primaryKey="user_id";

        protected $allowedFields=['user_id','first_name','last_name','gender','address','contact_no','email','DOB','Date_Joined','Qualification','pro_pic'];
    }
?>