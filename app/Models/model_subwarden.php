<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_subwarden extends Model{
        protected $table="sub_warden";
        protected $primaryKey="user_id";

        protected $allowedFields=['user_id','first_name','last_name','gender','address','contact_no','email','DOB','Date_Joined','Qualification','pro_pic'];
    }
?>