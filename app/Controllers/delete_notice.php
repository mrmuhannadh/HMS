<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\notice_model;
class delete_notice extends BaseController
{
	public function __construct(){
    }
   
	public function delete($notice_id = null){
		$model = new notice_model();
		$data['notice'] = $model->where('notice_id', $notice_id)->delete();
        return redirect()->back()->with('status','notices data deleted');
    }
}