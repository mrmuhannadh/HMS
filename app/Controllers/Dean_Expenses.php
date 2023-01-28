<?php

namespace App\Controllers;
use App\Models\model_dean;
use App\Models\model_expenses;

//home pages
class Dean_Expenses extends BaseController
{
    public function index(){
        echo view("dean/expenses/expenses.php");
     }

public function expenses(){
        $output='';
        $expenses = new model_expenses();
        
        $re=$expenses->findAll();
        foreach($re as $row){
            $output .='
        <tr class="table-primary" align="center">
                    <td>'. $row['receipt'].'</td>
                    <td>'. $row['type'].'</td>
                    <td>'. $row['Date'].'</td>
                    <td>'. $row['Amount'].'</td>
                    
           <td> 
                 <div id="'.$row['exp_id'].'" type="button"  onclick="myFunctionDel(this.id)" class="btn btn-danger">DELETE</div></td>
                 
        </tr>
    ';
        }
        
       
        return $output;
        //echo view("dean/electricity/electricity.php");
     }

     public function Delexpenses(){
        $expenses = new model_expenses();
        $id=$this->request->getVar('id');
        $result=$expenses->where('exp_id',$id)->delete();
        if($result){
            //return ("Notice Deleted");
            return ($this->expenses());
        }else{
            return ($this->expenses());
            //return ("Notice Not Deleted");
        }
        
     }
    }
    ?>