<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Security_model extends Model{
        protected $table="security";
        //protected $primaryKey="";

        protected $allowedFields=['sec_id','first_name','last_name','gender','address','contact_no','email','DOB','Date_Joined','pro_pic'];
    }
?>