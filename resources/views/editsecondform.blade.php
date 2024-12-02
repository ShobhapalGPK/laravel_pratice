<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../updatesecondform" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data1->id}}">
        name:<input type="text" name="name" value="{{$data1->name}}"><br><br>
        email:<input type="email" name="email" value="{{$data1->email}}"><br><br>
        password:<input type="password" name="password" value="{{$data1->password}}"><br><br>
        gender:<input type="radio" name="gnd" value="male" {{$data1->gender == 'male'?'checked':''}}>male
               <input type="radio" name="gnd" value="female"{{$data1->gender == 'female'?'checked':''}}>female<br><br>
               
        city:<select name="city">
            <option>select city</option>
            <option value="kanpur" {{$data1->city == 'kanpur'?'selected':''}}>kanpur</option>
            <option value="lucknow" {{$data1->city == 'lucknow'?'selected':''}}>lucknow</option>
            <option value="mumbai" {{$data1->city == 'mumbai'?'selected':''}}>mumbai</option>
            <option value="allahbad" {{$data1->city =='allahbad'?'selected':''}}>allahbad</option>
        </select><br><br>

        @php
        $item = explode(',',$data1->cource);
         @endphp
        
        cource:<input type="checkbox" name="chk[]" value="c" {{in_array('c',$item)?'checked':''}}>c
               <input type="checkbox" name="chk[]" value="c++" {{in_array('c++',$item)?'checked':''}}>c++
               <input type="checkbox" name="chk[]" value="php" {{in_array('php',$item)?'checked':''}}>php
               <input type="checkbox" name="chk[]" value="python" {{in_array('python',$item)?'checked':''}}>python
               <input type="checkbox" name="chk[]" value="java" {{in_array('java',$item)?'checked':''}}>java<br><br>

         address:<textarea name="address">{{$data1->address}}</textarea><br><br>
         <img src="{{asset('image/'.$data1->picture)}}" height="100px" width="100px" >
         photo:<input type="file" name="photo"><br><br>
         <button>submit</button>      
    </form>
</body>
</html>