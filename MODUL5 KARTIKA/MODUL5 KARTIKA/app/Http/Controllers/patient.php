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
    public function show($id){
        $data = patientModel::find($id);
        return view('patient-update')->with([
            'data'=> $data
        ]);
    }
    public function update(Request $request){
        DB::table('patient')->where('id',$request->id)->update([
		'vaccine_id' => $request->vaccine_id,
		'name' => $request->name,
        'nik'=>$request->nik,
		'alamat' => $request->alamat,
		'image_ktp' => $request->image_ktp,
        'no_hp'=>$request->no_hp,
	    ]);

        return view('/patient/patient-read');
    }
     public function show($id){
        $data = vaccineModel::find($id);
        return view('update-vaccine')->with([
            'data'=> $data
        ]);
    }
    public function delete(){
        	DB::table('patient')->where('id',$id)->delete();
	    return redirect('patient/patient-read');
    }
}
