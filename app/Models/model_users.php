<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_users extends Model{
        protected $table="users";
        //protected $primaryKey="user_id";

        protected $allowedFields=['user_id','user_name','password','post'];
    }
?>