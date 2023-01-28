<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class modal_stu_reg_limit extends Model{
        protected $table="modal_stu_reg_limit";
        protected $primaryKey="level";

        protected $allowedFields=['level','end_date'];
    }
?>