<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_entry_leave extends Model{
        protected $table="entry_leave";
        //protected $primaryKey="comp_id";

        protected $allowedFields=['student_ID','enter_date','enter_time','exit_date','exit_time'];
    }
?>