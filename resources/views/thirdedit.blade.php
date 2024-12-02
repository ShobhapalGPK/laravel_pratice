<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../thirdupdate" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data2->id}}">
        name:<input type="text" name="name" value="{{$data2->name}}"><br><br>
        email:<input type="email" name="email" value="{{$data2->email}}"><br><br>
        password:<input type="password" name="password" value="{{$data2->password}}"><br><br>

        gender:<input type="radio" name="gnd" value="male" {{$data2->gender == 'male'?'checked':''}}>male
               <input type="radio" name="gnd" value="female" {{$data2->gender =='female'?'checked':''}}>female<br><br>

         city:<select name="city">
            <option>select city</option>
            <option value="kanpur" {{$data2->city == 'kanpur'?'selected':''}}>kanpur</option>
            <option value="lucknow" {{$data2->city == 'lucknow'?'selected':''}}>lucknow</option>
            <option value="delhi" {{$data2->city == 'delhi'?'selected':''}}>delhi</option>
            <option value="allahbad" {{$data2->city == 'allahbad'?'selected':''}}>allahbad</option>
         </select><br><br>
         
         @php
         $x =explode(',', $data2->cource);
         @endphp
         cource:<input type="checkbox" name="chk[]" value="c" {{in_array('c',$x)?'checked':''}}>c
                 <input type="checkbox" name="chk[]" value="c++"  {{in_array('c++',$x)?'checked':''}}>c++
                 <input type="checkbox" name="chk[]" value="php"  {{in_array('php',$x)?'checked':''}}>php
                 <input type="checkbox" name="chk[]" value="python"  {{in_array('python',$x)?'checked':''}}>python
                 <input type="checkbox" name="chk[]" value="java"  {{in_array('java',$x)?'checked':''}}>java<br><br>

          <img src="{{asset('image/'.$data2->picture)}}" height="100px" width="100px">
          photo:<input type="file" name="photo"><br><br>
          <button>submit</button>       
    </form>
</body>
</html>