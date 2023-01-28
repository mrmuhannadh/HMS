<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class admin_model extends Model{
        protected $table="admin";
        //protected $primaryKey="";

        protected $allowedFields=['name','gender','password','email','admin_id'];
    }
?>