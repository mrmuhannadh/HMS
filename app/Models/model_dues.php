<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_dues extends Model{
        protected $table="student_fine";
        // protected $primaryKey="student_id";

        protected $allowedFields=['student_Id','defect','fine_amount'];
    }
?>