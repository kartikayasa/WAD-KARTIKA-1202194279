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
        return redirect('vaccine/vaccine-read');
    }
    public function show($id){
        $vaccine = DB::table('vaccine')->where('id',$id)->get();

        return view('vaccine-update',['vaccine'=> $vaccine]);
    }

    public function update(){

    }
    public function delete($id){
        $hapus = vaccineModel::find($id);
        $hapus->delete();
        return redirect('vaccine/vaccine-read');
    }

}
