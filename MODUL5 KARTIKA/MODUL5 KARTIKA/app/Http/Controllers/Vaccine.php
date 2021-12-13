<?php

namespace App\Http\Controllers;

use App\Models\Vaccine as ModelsVaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\vaccineModel;

class Vaccine extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function read(){
        // $data = vaccineModel::all();
        // return view('vaccine-read')->
        // with(['data'=> $data]);

        $data = vaccineModel::all();
        return view('vaccine/vaccine-read')->with(['data'=>$data]);
    }
    public function create(){
        return view('vaccine/vaccine-create');
    }
    public function store(Request $request){
        $data = $request->except(['_token']);
        vaccineModel::insert($data);
        return redirect('vaccine-read');
    }
    public function show($id){
        $data = vaccineModel::find($id);
        return view('update-vaccine')->with([
            'data'=> $data
        ]);
    }

    public function update(Request $request){
        DB::table('vaccine')->where('id',$request->id)->update([
		'name' => $request->name,
		'price' => $request->price,
		'description' => $request->description,
		'image' => $request->image
	    ]);

        return view('/patient/vaccine-read');
    }
    public function delete($id){
        	DB::table('vaccine')->where('id',$id)->delete();
	    return redirect('patient/vaccine-read');
    }
    

}
