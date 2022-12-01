<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeserta;

class DataPesertaController extends Controller
{
    //
    public function DataPesertaView(){
        //$allDatamhs=mhs::all();
        $data['allDataDataPeserta']=DataPeserta::all();
        return view('backend.DataPeserta.view_datapeserta', $data);
    }
    public function DataPesertaAdd(){
        //$allDataUser=Mhs::all();
        //$data['allDataMhs']=Mhs::all();
        return view('backend.datapeserta.add_datapeserta');
    
    }
    public function DataPesertaStore(Request $request){
        
        $data=new DataPeserta();
        $data->nama_peserta=$request->nama_peserta;
        $data->alamat=$request->alamat;
        $data->berat_badan=$request->berat_badan;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->usia=$request->usia;
        $data->save();

        return redirect()->route('datapeserta.view')->with('info','Tambah Data Berhasil');
    }

    public function DataPesertaEdit($id){
        //dd('berhasil masuk controller user edit');
        $editData= DataPeserta::find($id);
        return view('backend.DataPeserta.edit_datapeserta', compact('editData'));
    }


    public function DataPesertaUpdate(Request $request, $id){
        
        
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);
        //dd($request);
        $data=DataPeserta::find($id);
        $data->nama_peserta=$request->nama_peserta;
        $data->alamat=$request->alamat;
        $data->berat_badan=$request->berat_badan;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->usia=$request->usia;
        // $data->email=$request->email;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }

        $data->save();

        return redirect()->route('datapeserta.view')->with('info','Update Data berhasil');
    }
    public function DataPesertaDelete($id){
        //dd('berhasil masuk controller barang edit');
        $deleteData= DataPeserta::find($id);
        $deleteData->delete();


        return redirect()->route('DataPeserta.view')->with('info','Delete Data berhasil');
    }



}
