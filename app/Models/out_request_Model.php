<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class out_request_Model extends Model{
        protected $table="out_request";
        //protected $primaryKey="";

        protected $allowedFields=['req_id','reg_no','name','leave_date','leave_time','reason','Status','sent_date'];
    }
?>