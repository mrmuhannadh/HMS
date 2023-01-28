<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\notice_model;
use CodeIgniter\Files\File;
class SubWarden_Notice extends BaseController
{
    public function index()
    {
        echo view('SubWarden/Notice/notice.php');
        
    }
    public function postNotice(){
        $obj_notice=new notice_model();
        $sender=$this->request->getVar('sender');
        $notice=$this->request->getVar('notice');
        $subject=$this->request->getVar('subject');
      
      
        $date=date('Y-m-d');
        
        $time=date('H:i:s');
        $dataT=array(
            'owner'=>$sender,
            'date'=>$date,
            'time'=>$time,
            'title'=>$subject,
            'notice'=>$notice,
          
        );
        $re=$obj_notice->save($dataT);
        
        if($re){
            $result="Notice posted";
            return($this->getMyNotices());
            //return($result);
            //return ($toUpload);
        }else{
            return("Cannot post Notice");
        }
        //return($file);

        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('upload_form', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . '../' . $img->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload_success', $data);
        } else {
            $data = ['errors' => 'The file has already been moved.'];

            return view('upload_form', $data);
        }
    }
    public function getNotices(){
        $output="";
        $obj_notice=new notice_model();
        foreach(($result=$obj_notice->findAll()) as $row){
            $f=$row['file'];
            if($f!=""){
                $output .='
                <tr >
                    <td>'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button"  onclick="myFunction(this.id)">View More</div></td>                    
                </tr>
                <tr  class="moreDet"  id="div'.$row['notice_id'].'T">
                <th colspan="3" >
                <div class="container">
                <div class="row" id="in">
                    '.$row['notice'].'
                </div>
                </div>
                </th>
                <td>
                    <a href="'. $f .' " target="_black" class="noticeDown">Download</a>
                </td>
                </tr>
            '; 
            }else{
                $output .='
                <tr >
                    <td>'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button" value='.$row['notice_id'].'  onclick="myFunction(this.id)"">View More</div></td>                    
                    
                </tr>
                <tr class="moreDet" id="div'.$row['notice_id'].'T">
                <th colspan="4"  style="text-align:left;">
                <div class="container">
                    <div class="row">
                        '.$row['notice'].'
                    </div>
                </div>
                </th>
                
                </tr>
            '; 
            }
             
        }
        
        return $output;
    }
    public function getMyNotices(){
        $output="";
        $obj_notice=new notice_model();
        $user=$this->request->getVar('sender');
        foreach(($result=$obj_notice->where('owner',$user)->findAll()) as $row){
            $f=$row['file'];
            if($f!=""){
                $output .='
                <tr >
                    <td>'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button"  onclick="myFunction(this.id)">View More</div></td>                    
                    <td>
                        <i type="button" data-toggle="modal" data-target="#-==" class="fas fa-trash" id="'.$row['notice_id'].'" onclick="deleteConformFunction(this.id)" style="color:red"></i>
                    </td>
                </tr>
                <tr  class="moreDet"  id="div'.$row['notice_id'].'T">
                <th colspan="4" >
                <div class="container">
                <div class="row" id="in">
                    '.$row['notice'].'
                </div>
                </div>
                </th>
                <td>
                    <a href="'. $f .' " target="_black" class="noticeDown">Download</a>
                </td>
                </tr>
            '; 
            }else{
                $output .='
                <tr >
                    <td>'.$row['date'].'</th>
                    <td>'.$row['time'].'</td>
                    <td>'.$row['title'].'</td>
                    <td ><div id="div'.$row['notice_id'].'" type="button" value='.$row['notice_id'].'  onclick="myFunction(this.id)"">View More</div></td>                    
                    <td>
                        <i type="button" data-toggle="modal" data-target="#deleteModal" class="fas fa-trash " id="'.$row['notice_id'].'" onclick="deleteConformFunction(this.id)" style="color:red"></i>
                    </td>
                    
                </tr>
                <tr class="moreDet" id="div'.$row['notice_id'].'T">
                <th colspan="5"  style="text-align:left;">
                <div class="container">
                    <div class="row">
                        '.$row['notice'].'
                    </div>
                </div>
                </th>
                
                </tr>
            '; 
            }
             
        }
        
        return $output;
    }
    public function getDelNotices(){
        $output="";
        $obj_notice=new notice_model();
        $id=$this->request->getVar('id');
        foreach(($result=$obj_notice->where('notice_id',$id)->findAll()) as $row){
            $output.='
            <button class="btn btn-danger" style="width:100%;" id="'.$row['notice_id'].'" onclick="deleteFunction(this.id)">Delete</button>
            ';
        }
        return $output;
    }

    public function DelNotices(){
        $output="";
        $obj_notice=new notice_model();
        $id=$this->request->getVar('id');
        $result=$obj_notice->where('notice_id',$id)->delete();
        if($result){
            return($this->getMyNotices());
        }else{
            return ("Notice Not Deleted");
        }
    }
   
}