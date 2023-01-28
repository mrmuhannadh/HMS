<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class chatbot_model extends Model{
        protected $table="chatbot";
        //protected $primaryKey="";

        protected $allowedFields=['id ','question','answer'];
    }
?>