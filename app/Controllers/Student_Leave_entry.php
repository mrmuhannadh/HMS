<?php

namespace App\Controllers;
//use App\Models\DashboardModel;

use App\Models\entry_leave_Model;

class Student_Leave_entry extends BaseController{

    // public function report(){
       
        

    //     $session=session();
    //     $id='';
    //     if(session()->get("u_id")){
    //         $id=session()->get("u_id");
    //     }
        
    //     $rep= new entry_leave_Model();
       
    //     $data['entry_leave']= $rep->where('student_ID',$id)->findAll();
    //     echo view('Student/dashboard/index.php',$data);
    
    // }
    public function index(){
        echo view('Student/dashboard/attendance_report.php');
    }
//     public function get_details(){
//         $obj_student= new entry_leave_Model();

//         $output="";
//         $user=$this->request->getVar('the_user');
//         foreach(($result=$obj_student->where('student_ID',$user)->findAll()) as $d){
//             $output .='
//             <div class="container search-table">
//             <div class="search-box">
//                 <div class="row">
//                     <div class="col-md-3">
//                         <h5>Attendance Report</h5>
//                     </div>
//                     <div class="col-md-9">
//                         <input type="text" id="myAction" onkeyup="myFunction()" class="form-control" placeholder="Search date here">
//                         <script>
//                             $(document).ready(function () {
//                                 $("#myAction").on("keyup", function () {
//                                     var value = $(this).val().toLowerCase();
//                                     $("#myTable tr").filter(function () {
//                                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//                                     });
//                                 });
//                             });
//                         </script>
//                     </div> 
//                 </div>
//             </div>
//             <div class="search-list">
//              <div class="container">
//                  <div class="row">
//                      <div class="col-md-12 mt-5">
//                          <div class="card">
//                              <div class="card-body">
                             
//                                  <table class="table"  id="myTable" >
//                                  <thead>
//                                  <tr>
                                     
//                                      <th>Date</th>
//                                      <th>Time</th>
                                    
                                     
//                     </tr>
//                     </thead>
//                     <tr>    
//                     <tbody>
                               
//                                     <td>
//                                         '. $d['date'] .'
//                                     </td>
                               
                               
//                                     <td>
//                                         '. $d['time'].'
//                                     </td>
                     
                                    
//                                 </tr>
                                
//                                 </tbody>
//                                 </div>
//                                 </div>
//                                 </div>
//                                 </div>
//                                 </table>
                                
                            
//             ';  
//         }
//         return $output;
// }

public function get_details(){
    $obj_student= new entry_leave_Model();

            $output='';
            $user=$this->request->getVar('the_user');
            $result=$obj_student->where('student_ID',$user)->findAll();
            if($result){
                foreach($result as $row){
                  

                    $output .='
                        <tr>
                            <td>'.$row['enter_date'].'</td>
                            <td>'.$row['enter_time'].'</td>
                            <td>'.$row['exit_date'].'</td>
                            <td>'.$row['exit_time'].'</td>
                            
                            
                        </tr>
                    ';
                }
                
            }else{
                return("NOPE");
            }
            
        return $output; 
    }
    


// public function getDelRecords(){}
//     $output="";
//     $obj_notice=new entry_leave_Model();
//     $id=$this->request->getVar('id');
//     foreach(($result=$obj_notice->where('notice_id',$id)->findAll()) as $row){
//         $output.='
//         <button class="btn btn-danger" style="width:100%;" id="'.$row['notice_id'].'" onclick="deleteFunction(this.id)">Delete</button>
//         ';
//     }
//     return $output;
// }

// public function DelNotices(){
//     $output="";
//     $obj_notice=new notice_model();
//     $id=$this->request->getVar('id');
//     $result=$obj_notice->where('notice_id',$id)->delete();
//     if($result){
//         return ("Notice Deleted");
//     }else{
//         return ("Notice Not Deleted");
//     }
// }
}