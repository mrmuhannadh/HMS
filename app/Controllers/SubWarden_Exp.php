<?php

namespace App\Controllers;
use App\Models\model_subwarden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_users;
use App\Models\model_expenses;

class SubWarden_Exp extends BaseController
{
    public function index(){
        echo view("SubWarden/Expences/expence.php");
    }
    public function getExp(){
        $output='';
        $obj_exp = new model_expenses();
        $re=$obj_exp->findAll();
        if($re){
            foreach($re as $row){
                $output.='
                    <tr>
                        <td>'.$row['Date'].'</td>
                        <td>'.$row['type'].'</td>
                        <td>'.$row['Amount'].'</td>
                        <td>'.$row['receipt'].'</td>
                        
                        <td>
                            <i type="button" data-toggle="modal" data-target="#modifyModal" class="fas fa-edit" id="'.$row['exp_id'].'" onclick="editFunction(this.id)" style="color:green"></i>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i type="button" class="fas fa-trash" id="'.$row['exp_id'].'" onclick="deleteConformFunction(this.id)" style="color:red"></i>

                        </td>
                    </tr>
                ';
            }  
        }
        return $output;
    }
    public function getExpEdit(){
        $output='';
        $id=$this->request->getVar('id');
        $obj_exp = new model_expenses();
        $re=$obj_exp->where('exp_id',$id)->findAll();
        if($re){
            foreach($re as $row){
                $output.='
                <table border="0" class="table table-borderless table-light tbl ">                               
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label class="form-label">RECEIPT ID</label>
                            <input type="text" class="form-control" id="id" class="id" value="'.$row['exp_id'].'" name="fname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> 
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label class="form-label">EXPENCE TYPE</label>
                            <select class="form-control" name="type" id="type">
                                <option value="'.$row['type'].'" selected>'.$row['type'].'</option>
                            </select>                            
                        </div> 
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label class="form-label">DATE</label>
                            <input type="date" class="form-control" id="date" class="date" value="'.$row['Date'].'" required>
                            
                        </div> 
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr> 
                    <td>
                        <div class="form-group">
                            <label  class="form-label">AMOUNT</label>
                            <input type="number" class="form-control" id="amount" class="amount" value="'.$row['Amount'].'" required>
                            
                        </div> 
                    </td>
                </tr>
                <input type="hidden" class="form-control" id="attach" class="attach" value="'.$row['receipt'].'" required>

                </div>
                </table>
                
                ';
            }  
            $output .='
            <div class="row">
                <div class="col-md-6">
                    <button type="button" id="'.$row['exp_id'].'" onclick="myfunReset(this.id)" class="btn btn-danger">RESET</button>
                </div>
                <div class="col-md-6">
                    <button type="button" id="'.$row['exp_id'].'" class="btn btn-success" onclick="myfunUpdate(this.id)">UPDATE</button>
                </div>
            </div>
            ';
        }
        return $output;
    }
    public function delExp(){

        $obj_exp= new model_expenses();
        $id=$this->request->getVar("id");
        $result=$obj_exp->where('exp_id',$id)->delete();
        if($result){
            return($this->getExp());
        }
    }
    public function ExpUpdate(){
        $obj_exp= new model_expenses();
        $id=$this->request->getVar("id");
        $type=$this->request->getVar("type");
        $date=$this->request->getVar("date");
        $amount=$this->request->getVar("amount");
        $attach=$this->request->getVar("attach");
        $data=array(
            'exp_id'=>$id,
            'type'=>$type,
            'Date'=>$date,
            'Amount'=>$amount,
            'receipt'=>$attach     
        );
        $reUp=$obj_exp->where('exp_id',$id)->set($data)->update();
        if($reUp){

            //quick update
            return($this->getExp());
        }
    }

    public function addExp(){
        $output='';
        $obj_exp= new model_expenses();
        $date=$this->request->getVar('date');
        $ExType=$this->request->getVar('ExType');
        $amount=$this->request->getVar('amount');
        $rId=$this->request->getVar('rId');
        $data=array(
            'type'=>$ExType,
            'Date'=>$date,
            'Amount'=>$amount,
            'receipt'=>$rId     
        );
        $reIn=$obj_exp->save($data);
        if($reIn){
            $output .='Expence Added';
        }
        return $output;
    }
}