<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class model_password_reset extends Model{
        protected $table="reset_password";
        protected $primaryKey="email";

        protected $allowedFields=['email','otp','used'];
    }
?>