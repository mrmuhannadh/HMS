<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class products extends Model{
        protected $table="gallery";
        protected $primaryKey="Image_id";

        protected $allowedFields=['Image_id','Image_name','Date','time','image'];
    }
?>