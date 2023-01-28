<?php
namespace App\Controllers;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\boys_hostel;
use App\Models\girls_hostel;
use App\Models\chats_models;
use App\Models\model_complaints;
use App\Models\model_subwarden;
class SubWarden_Fees extends BaseController
{
    public function index()
    {
        echo view('SubWarden/Fees/hostelfee_Detail.php');   
    }
}
