<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class chats_model extends Model{
        protected $table="chats";
        //protected $primaryKey="";

        protected $allowedFields=['sender_id','receiver_id','date','time','chat'];
    }
?>