<?php namespace App\Models;
use CodeIgniter\Model;

class image_model extends Model
{
     
	
    protected $table = 'gallery'; //table name
    // protected $primaryKey="Image_id";
     protected $allowedFields= ['Image_id','Image_name','image_path','Date','time'];//column name of table
}
?>