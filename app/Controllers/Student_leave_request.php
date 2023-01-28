<?php

namespace App\Controllers;
//use App\Models\DashboardModel;

use App\Models\out_request_Model;

class Student_leave_request extends BaseController
{
    //public function savedata()
	//{
        //$this->load->view("Student/Register/register");
        //if($this->input->post('register')){
              //echo "Hi";
        //}
        public function index()  
    {  
        $this->load->view("Student/Register/register");  
    } 
    public function leave(){
        echo view("Student/Request/Leave_request.php");
    } 
    // public function savedata(){

    // }
    public function leave_req()  
    {  
        $obj_leaveReq = new out_request_Model();
      
        $dateToday= date('Y-m-d');
        $output='';
        $user=$this->request->getVar('user');
        $date=$this->request->getVar('date');
        $time=$this->request->getVar('time');   
        $reason=$this->request->getVar('reason');
        $status=0;
        $data=array(
            'reg_no'=>$user,
            'leave_date'=>$date,
            'leave_time'=>$time,
            'reason'=>$reason,
            'Status'=>$status,
            'sent_date'=>$dateToday
        );
        
        $re=$obj_leaveReq->save($data);
        if($re){
            return($this->getAllReq());
        }else{
            return ('Request Not Sent');
        }
        
        
         return $dateToday; 
    }
    
    public function getAllReq(){
        $output='';
        $dateToday=date('Y-m-d');
        $obj_leaveReq = new out_request_Model();
        //$result = $obj_leaveReq->orderBy('reason', 'DESC')->findAll(); 
        foreach(($result=$obj_leaveReq->orderBy('sent_date', 'DESC')->findAll()) as $d){
            if($d['sent_date']==$dateToday){
                $output .='              
                <tr>
                    <td>
                        '. $d['leave_date'].'
                    </td>
                
                   
                    <td>
                    '.  $d['leave_time'].'
                    </td>
                
                    
                    <td>
                    '.  $d['reason'].'
                    </td>
                    <td>
                    ';  if($d['Status']==0){
                        $output .='
                            <button class="btn btn-warning" style="width:100%;color:white">PENDING</button>
                        ';
                    }else if($d['Status']==1){
                        $output .='
                            <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                        ';
                    }else if($d['Status']==-1){
                        $output .='
                            <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                        ';
                    }
                    
                    $output .='
                    </td>
                    <td style="padding-top:2%">
                    <i class="fas fa-trash-alt" data-toggle="modal" data-target="#ModalDel" id="'.$d['req_id'].'" onclick="functionDel(this.id)" style="color:red;font-size:20px;padding-right:25%;"></i>
                    
                   
                    <i type="button" class="fas fa-edit"  data-toggle="modal" data-target="#ModalUpd" style="color:black;font-size:20px"  id="'.$d['req_id'].'" onclick="functionEdit(this.id)"></i>
                    </td>
                    
                </tr>
                
            ';  
            }else{
                $output .='              
                <tr>
                    <td>
                        '. $d['leave_date'].'
                    </td>
                
                   
                    <td>
                    '.  $d['leave_time'].'
                    </td>
                
                    
                    <td>
                    '.  $d['reason'].'
                    </td>
                    <td>';  if($d['Status']==0){
                        $output .='
                            <button class="btn btn-warning" style="width:100%;color:white">PENDING</button>
                        ';
                    }else if($d['Status']==1){
                        $output .='
                            <button class="btn btn-success" style="width:100%;">ACCEPTED</button>
                        ';
                    }else if($d['Status']==-1){
                        $output .='
                            <button class="btn btn-danger" style="width:100%;">REJECTED</button>
                        ';
                    }
                    
                    $output .='
                    </td>
                </tr>
                
            ';  
            }
            
        }

        return $output;
    }

    public function delReq(){
        $output='';
        $id=$this->request->getVar('id');



        $output .='
                <button type="submit" id="'.$id.'" onclick="functionDelCon(this.id)" style="width:100%" class="btn btn-danger">Delete</button>        
        ';
        return $output;
    }
    public function conformDelete(){
        $output='';
        $id=$this->request->getVar('id');
        $obj_leaveReq = new out_request_Model();
        $re=$obj_leaveReq->where('req_id',$id)->delete();
        if($re){
            return($this->getAllReq());
        }else{
           return 'Cannot Delete';
        }
    }

    public function updateSelected(){
        $obj_leaveReq = new out_request_Model();
        $dateToday=date('Y-m-d');
        $output='asdasd';
        $user=$this->request->getVar('user');
        $date=$this->request->getVar('date');
        $time=$this->request->getVar('time');   
        $reason=$this->request->getVar('reason');
        $id=$this->request->getVar('id');
        $status=0;
        $data=array(
            'req_id'=>$id,
            'reg_no'=>$user,
            'name'=>'kk',
            'leave_date'=>$date,
            'leave_time'=>$time,
            'reason'=>$reason,
            'Status'=>$status,
            'sent_date'=>$dateToday
        );
        $reUp=$obj_leaveReq->where('req_id',$id)->set($data)->update();
        //$reUp=$obj_leaveReq->update('out_request',$data);
            if($reUp){
                return($this->getAllReq());
                //return $id;
            }else{
                echo "Not Updated";
            }
        
    }

    public function updateReq(){
        $output='';
        $id=$this->request->getVar('id');
        $obj_leaveReq = new out_request_Model();
        
        foreach(($result = $obj_leaveReq->where('req_id',$id)->findAll()) as $d){
            $output .='
            <form method="post" >
                <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                                
                                    <div class="col-md-12">
                                    <label for="dateF">Date</label>
                                    <input id="dateF" type="date"  name="leave_date" class="form-control" value="'.$d['leave_date'].'" required="required" > 
                                    <small id="emailHelp" class="form-text text-muted">Select a date</small>
                                </div>
                            <div  class="col-md-12">
                                <label for="dateF">Time</label>
                                <input id="timeF" type="time"  name="leave_time" class="form-control"  value="'.$d['leave_time'].'" required="required" > 
                                <small id="emailHelp" class="form-text text-muted">Select a time</small>
                            </div>
                        
                        
                            <div class="col-md-12 otherReason">
                                
                                <input type="text" id="otherReasonMsg" value="'.$d['reason'].'" class="form-control" name="newReason">
                                <small id="emailHelp" class="form-text text-muted">Enter a valid reason</small>
                            </div>
               
                            </div>
                            
                    </div>
                </div>
                </form>
            <div class="row text-center">
                
                <div class="col-md-6 text-center">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal" style="width:100%">Close</button>
                </div>
                <div class="col-md-6 text-center" id="updateBtn">
                    <button type="reset" id="'.$d['req_id'].' "class="btn btn-primary" onclick="functionUpdateReq(this.id)" data-dismiss="modal" style="width:100%">Update</button>
                </div>
                </div>
            ';
        }

        return $output;
    }
}