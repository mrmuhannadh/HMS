<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_complaints extends Model{
        protected $table="complaints";
        protected $primaryKey="comp_id";

        protected $allowedFields=['comp_id','receiver','sender','date','time','subject','complaint'];
    }
?>