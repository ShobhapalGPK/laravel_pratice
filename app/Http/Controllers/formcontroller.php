<?php

namespace App\Http\Controllers;

use App\Models\formtbl;
use App\Models\registertbl;
use App\Models\secondtbl;
use App\Models\thirdtbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formcontroller extends Controller
{
    public function formcode(Request $result)
    {
        $data = new formtbl;
        $data->name = $result->name;
        $data->email = $result->email;
        $data->password = $result->password;
        $data->mobile = $result->mobile;
        $data->gender = $result->gnd;
        $data->city = $result->city;
        $data->cource = implode(',', $result->get('chk'));

        $photo = $result->file('photo');
        $photo->getClientOriginalName();
        $data->photo = $photo->getClientOriginalName();

        $path = "image";
        $photo->move($path, $photo->getClientOriginalName());
        $data->save();
    }


    public function formshow(){
        // ORM Method
       // $data=formtbl::all();
        
        //Query Builder Method
        $data= DB::table('formtbls')->orderBy('id', 'asc')->get();

        return view('formshow',compact('data'));
    }

    public function deleteform($id){
        $data = formtbl::find($id)->first();
        $data->delete();
        return redirect('formshow');
    }

    public function editform($id){
        $data = formtbl::find($id);
        return view('formedit', compact('data'));

    }

    public function updateform(Request $result){
        $id = $result->id;
        $data = formtbl::find($id);
        $oldpic = $data->photo;
        //dd($oldpic);
        $img = $result->file('photo');
       

       if(empty($img))
       {
        $data->name = $result->name;
        $data->email = $result->email;
        $data->password = $result->password;
        $data->mobile = $result->mobile;
        $data->gender= $result->gnd;
        $data->city = $result->city;
        $data->cource = implode(',',$result->get('chk'));
        $data->photo=$oldpic;
        $data->update();
        return redirect('formshow');
       }
       else
       {
        $data->name = $result->name;
        $data->email = $result->email;
        $data->password = $result->password;
        $data->mobile = $result->mobile;
        $data->gender= $result->gnd;
        $data->city = $result->city;
        $data->cource = implode(',',$result->get('chk'));
        // $img = $result->file('photo');
        // $img->getClientOriginalName();
        $data->photo = $img->getClientOriginalName();
        $path = 'image';
        $img->move($path,$img->getClientOriginalName());
        $data->update();
        return redirect('formshow');

        $path1 = public_path($path.$oldpic);
         
        unlink($path1);

       }
    }

       //secondform
    
    public function secondformcode(Request $result){
        $data1 =  new secondtbl;

        $data1->name = $result->name;
        $data1->email = $result->email;
        $data1->password = $result->password;
        $data1->gender = $result->gnd;
        $data1->city = $result->city;
        $data1->cource = implode(',',$result->get('chk'));
        $data1->address = $result->address;
        $photo = $result->file('photo');
        $photo->getClientOriginalName();
        $data1->picture = $photo->getClientOriginalName();
        $path = "image";
        $photo->move($path,$photo->getClientOriginalName());
        $data1->save();
       return redirect('secondlogin'); // $result->session()->put('email',$email);
    }

    public function scecondformshow(){
        $data1 = secondtbl::all();
        return view('scecondformshow',compact('data1'));
        
    }

    public function deletesecondform($id){
        $data1 = secondtbl::find($id);
        $path = 'image';
        $oldpic = $data1->picture;
        $path1 = public_path($path . '/' . $oldpic);
        unlink($path1);
        $data1->delete();
        return redirect('scecondformshow');
    }

    public function editsecondform($id){
        $data1 = secondtbl::find($id);
        return view('editsecondform',compact('data1'));
    }

    public function updatesecondform(Request  $result){
        $id = $result->id;
        $data1 = secondtbl::find($id);
          
        $img = $result->file('photo');
        $oldimg = $data1->picture;

        if(empty($img)){
        $data1->name = $result->name;
        $data1->email = $result->email;
        $data1->password = $result->password;
        $data1->gender = $result->gnd;
        $data1->city = $result->city;
        $data1->cource = implode(',',$result->get('chk'));
        $data1->address = $result->address;
        $data1->picture = $oldimg;
        $data1->update();
        return redirect('scecondformshow');

        }
        else{

            $data1->name = $result->name;
            $data1->email = $result->email;
            $data1->password = $result->password;
            $data1->gender = $result->gnd;
            $data1->city = $result->city;
            $data1->cource = implode(',',$result->get('chk'));
            $data1->address = $result->address;
            $img->getClientOriginalName();
            $data1->picture = $img->getClientOriginalName();
             
            $path = "image";
            $img->move($path,$img->getClientOriginalName());
            
            $path1 = public_path("image/".$oldimg);
            unlink($path1);

            $data1->update();
            return redirect('scecondformshow');
        }


    }

    public function secondlogincode(Request $result){
        $email =$result->email;
        $password = $result->password;

        $data1 = secondtbl::where('email',$email)->first();

        if($data1->email == $email){
            if($data1->password == $password){
               $result->session()->put('email',$email);
               return redirect('dashboard');

            }
            else{
                echo"password not match";
            }


        }
        else{
            echo"email not match";
        }
    }

    public function logout(){
        $email = session()->get('email');

       if(isset($email)){
        session()->flush('email');
        return redirect('secondlogin');
       }
        
    }

    //third

    public function thirdcode(Request $result){
        $data2 = new thirdtbl();
        $data2->name = $result->name;
        $data2->email = $result->email;
        $data2->password = $result->password;
        $data2->gender = $result->gnd;
        $data2->city = $result->city;
        $data2->cource = implode(',',$result->get('chk'));
        $photo = $result->file('photo');
        $photo->getClientOriginalName();
        $data2->picture = $photo->getClientOriginalName();

        $path = "image";
        $photo->move($path,$photo->getClientOriginalName());

        $data2->save();
        echo"data save";

    }

    public function thirdshow(){
        $data2 = thirdtbl::all();
        return view('thirdshow', compact('data2'));
    }

    public function thirddelete($id){
        $data2 = thirdtbl::find($id);

        $oldpic =$data2->picture;
        $path = public_path('image/'.$oldpic);
        unlink($path);

        $data2->delete();
        return redirect('thirdshow');
    }



    public function thirdedit($id){
        $data2 = thirdtbl::find($id);

        return view('thirdedit', compact('data2'));
    }

    public function thirdupdate(Request $result){
        $id = $result->id;
        $data2 = thirdtbl::find($id);
        $oldimg = $data2->picture;
        $img = $result->photo;

        if(empty($img)){
            $data2->name = $result->name;
        $data2->email = $result->email;
        $data2->password = $result->password;
        $data2->gender = $result->gnd;
        $data2->city = $result->city;
        $data2->cource = implode(',',$result->get('chk'));
        $data2->picture = $oldimg;
        $data2->update();
        return redirect('thirdshow');

        }
        else{
            $data2->name = $result->name;
        $data2->email = $result->email;
        $data2->password = $result->password;
        $data2->gender = $result->gnd;
        $data2->city = $result->city;
        $data2->cource = implode(',',$result->get('chk'));
        $img->getClientOriginalName();
        $data2->picture = $img->getClientOriginalName();

        $path = 'image';
        $img->move($path,$img->getClientOriginalName());

        $path1= public_path($path."/".$oldimg);
        unlink($path1);

        $data2->update();
        return redirect('thirdshow');


        }
    }

    public function registrationcode(Request $result){
        $name = $result->name;
        $email = $result->email;
        $password = $result ->password;

        $data = new registertbl;
        $check = registertbl::where('email',$email)->first();

        if(isset($check)){
           echo"email already exist";
        }
        else{
            $data->name = $name;
            $data->email = $email;
            $data->password = $password;
            $data->save();
            return redirect('login');
        }
        


    }

    public function logincode(Request $result){
        $email = $result->email;
        $password = $result->password;

        $data = registertbl::where('email', $email)->first();
        if($data->email == $email){
          if($data->password == $password){
            $result->session()->put('email',$email);
            return redirect('dashboard');
          }
          else{
            echo"password match";
          }
        }
        else{
            echo"email not match";
        }
    }


    public function changepasswordcode(Request $result){
        $opass = $result->opass;
        $npass = $result->npass;
        $cpass = $result->cpass;

        $email = session()->get('email');
        $data = registertbl::where('email', $email)->first();

        if($data->password==$opass){
            if($npass == $cpass){
                $data->password = $npass;
                $data->update();
               return redirect('login');
            }
            else{
                echo"old password and new password not match";
            }

        }
        else{
            echo"old password not match";
        }
    }
}
