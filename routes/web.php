<?php

use App\Http\Controllers\formcontroller;
use App\Http\Controllers\stepcontroller;
use App\Models\formtbl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// view form

route::view('form','form');
route::post('formcode',[formcontroller::class,'formcode']);
route::get('formshow',[formcontroller::class,'formshow']);
route::get('deleteform/{id}',[formcontroller::class,'deleteform']);
route::get('editform/{id}',[formcontroller::class,'editform']);
route::post('updateform',[formcontroller::class,'updateform']);


// secondform

route::view('secondform','secondform');
route::post('secondformcode',[formcontroller::class,'secondformcode']);
route::get('scecondformshow',[formcontroller::class,'scecondformshow']);
route::get('deletesecondform/{id}',[formcontroller::class,'deletesecondform']);
route::get('editsecondform/{id}',[formcontroller::class,'editsecondform']);
route::post('updatesecondform',[formcontroller::class,'updatesecondform']);


//lohin

route::view('secondlogin','secondlogin');
route::post('secondlogincode',[formcontroller::class,'secondlogincode']);

route::view('dashboard','dashboard');
route::get('logout',[formcontroller::class,'logout']);

// third

route::view('third','third');
route::post('thirdcode',[formcontroller::class,'thirdcode']);
route::get('thirdshow',[formcontroller::class,'thirdshow']);
route::get('thirddelete/{id}',[formcontroller::class,'thirddelete']);
route::get('thirdedit/{id}',[formcontroller::class,'thirdedit']);
route::get('thirdedit/{id}',[formcontroller::class,'thirdedit']);

route::view('thirdupdate','thirdupdate');
route::post('thirdupdate',[formcontroller::class,'thirdupdate']);



// registration
route::view('registration','registration');
route::post('registrationcode',[formcontroller::class,'registrationcode']);
route::view('login','login');
route::post('logincode',[formcontroller::class,'logincode']);
route::view('changepassword','changepassword');
route::post('changepasswordcode',[formcontroller::class,'changepasswordcode']);

route::view('step1','step1');
route::view('step2','step2');
route::post('stepcode',[stepcontroller::class,'stepcode']);
route::post('step2code',[stepcontroller::class,'step2code']);

route::view('previous','previous');
route::get('previous/{id}',[stepcontroller::class,'previous']);
route::post('previouscode',[stepcontroller::class,'previouscode']);


route::view('newform','newform');
route::post('newformcode',[stepcontroller::class,'newformcode']);