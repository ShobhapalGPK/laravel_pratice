<?php

namespace App\Http\Controllers;

use App\Models\steptbl;
use App\Models\tbl1;
use App\Models\tbl2;
use Illuminate\Http\Request;

class stepcontroller extends Controller
{
    public function stepcode(Request $result){
        $data = new steptbl();
        $data->name = $result->name;
        $data->city = $result->city;
        $data->mobile = $result->mobile;
        $data->email = "";
        $data->password = "";
        $data->picture = "";
        $data->save();
        $lastid = $data->id;
        return view('step2',compact('lastid'));
    }

    public function step2code(Request $result){
        $id = $result->id;

        $data = steptbl::find($id);
        $data->email = $result->email;
        $data->password = $result->password;
        $photo = $result->file('photo');
        $photo->getClientOriginalName();
        $data->picture =  $photo->getClientOriginalName();
        $data->update();
        return redirect('step1');
    }


    public function previous($lastid){
        $data = steptbl::find($lastid);
        return view('previous',compact('data'));
    }

    public function previouscode(Request $result){
        $lastid = $result->id;
        $data = steptbl::find($lastid);
        $data->name = $result->name;
        $data->city = $result->city;
        $data->mobile = $result->mobile;
        $data->email = "";
        $data->password = "";
        $data->picture = "";
        $data->update();
        return view('step2',compact('lastid'));

    }

    public function newformcode(Request $result){
        $data1 = new tbl1();
        $data2 = new tbl2();

        $data1->name = $result->name;
        $data1->email = $result->email;
        $data1->password = $result->password;
        $data1->save();

     
        $data2->email = $result->email;
        $data2->password = $result->password;
        $data2->save();


        echo"store";

    }

}
