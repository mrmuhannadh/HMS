<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class notice_model extends Model{
        protected $table="notice";
        // protected $primaryKey="notice_id";

        protected $allowedFields=['notice_id','owner','date','time','title','notice','file'];
    }
?>