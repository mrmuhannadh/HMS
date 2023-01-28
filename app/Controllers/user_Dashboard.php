<?php namespace App\Controllers;



//use App\Models\DashboardModel;
use App\Models\admin_model;
use App\Models\notice_model;




class user_Dashboard extends BaseController
{
   
    
   
          
    
    
  
 public function notice(){
        
        $notice = new notice_model();
        $data['notice'] = $notice -> findAll();
        echo view("admin/Notices/notices.php",$data);
        // $products = new products();
        // $data['products'] = $products->findAll();
        // echo view("admin/gallery/gallery.php",$data);
    } 
    

    


    
    }
   

    
    

?>