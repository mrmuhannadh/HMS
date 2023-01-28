<?php 

namespace App\Models;  

use CodeIgniter\Model;

 

class GalleryModel extends Model{


    protected $table = 'gallery';

    

    protected $allowedFields = [

        'Image_id',

        'Image_name',

        'image_path',

        'Date',

        'time'

    ];

}