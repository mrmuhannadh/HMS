<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Complaints_Model extends Model{
        protected $table="complaints";
        //protected $primaryKey="comp_id";

        protected $allowedFields=['receiver','sender','date','time','subject','complaint'];
    }
?>