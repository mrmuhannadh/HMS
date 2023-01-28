<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_expenses extends Model{
        protected $table="expences";
        protected $primaryKey="exp_id";

        protected $allowedFields=['type','Date','Amount','receipt'];
    }
?>