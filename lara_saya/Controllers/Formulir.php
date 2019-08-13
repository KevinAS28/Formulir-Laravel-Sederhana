<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelForm;

class Formulir extends Controller
{
    public function formulir(){
        $data = ModelForm::all();
        return view("formulir", ["data"=>$data]);
    }

    public function masukkan(Request $r){
        //dapatkan dari input user
        $nama = $r->input("nama");
        $umur = $r->input("umur");

        //masukan ke database
        $data = new ModelForm();
        $data->nama = $nama;
        $data->umur = $umur;
        $data->save();
        return redirect()->to("formulir");   
    }

    public function formulirEdit(Request $r){
        $data0 = ModelForm::find($r->id);
        $data = ModelForm::all();
        return view("formulir", ["data"=>$data, "id"=>($data0->id), "edit"=>true]);
    }

    public function formulirEditMasuk(Request $r){
        $data = ModelForm::find($r->id);
        $data->nama = $r->input("nama");
        $data->umur = $r->input("umur");
        $data->save();
        return redirect()->to("formulir");
    }

    public function hapus(Request $r){
        $id = $r->input("id");
        $data = ModelForm::find($id)->delete();
        return redirect()->action("Formulir@formulir");
    }

}
