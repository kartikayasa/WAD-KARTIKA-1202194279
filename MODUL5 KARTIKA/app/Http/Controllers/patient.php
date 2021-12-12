<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patientModel;
use App\Models\vaccineModel;

class patient extends Controller
{
    public function read(){
        return view('patient/patient-read');
    }
    public function list(){
        $data = vaccineModel::all();
        return view('patient/patient-list')->with(['data'=>$data]);
    }
    public function create($id){
        $data = patientModel::find($id);
        return view('patient/patient-create/{$id}',['data'=>$data]);
    }
}
