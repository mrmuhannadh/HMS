<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\complaints_model;
class delete_complaint extends BaseController
{
	public function __construct(){
    }
   
	public function delete($comp_id = null){
		$model = new complaints_model();
		$data['complaints'] = $model->where('comp_id', $comp_id)->delete();
        return redirect()->back()->with('status','Complaints data deleted');
    }
}