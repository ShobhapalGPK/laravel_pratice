<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

        <form action="../updateform" method="post" enctype="multipart/form-data">
        @csrf
        <h1> Edit Registration form</h1>
        <input type="hidden" name="id" value="{{$data->id}}">
        name:<input type="text" name="name" value="{{$data->name}}"><br><br>
        email:<input type="email" name="email" value="{{$data->email}}"><br><br>
        password:<input type="password" name="password" value="{{$data->password}}"><br><br>
        mobile:<input type="number" name="mobile" value="{{$data->mobile}}"><br><br>
        gender:<input type="radio" name="gnd" value="male" {{$data->gender == 'male'?'checked':''}}>male
                <input type="radio" name="gnd" value="female" {{$data->gender == 'female'?'checked':''}}>female<br><br>

        city:<select name="city">
            <option value="lucknow" {{$data->city == 'lucknow'?'selected':''}}>Lucknow</option>
            <option value="kanpur" {{$data->city == 'kanpur'?'selected':''}}>kanpur</option>
            <option value="mumbai" {{$data->city == 'mumbai'?'selected':''}}>mumbai</option>
            <option  value="delhi" {{$data->city == 'delhi'?'selected':''}}>delhi</option>
            <option  value="noida" {{$data->city == 'noida'?'selected':''}}>noida</option>
            <option  value="hariyana" {{$data->city == 'hariyana'?'selected':''}}>hariyana</option>
            <option  value="punjab" {{$data->city == 'punjab'?'selected':''}}>punjab</option>
        </select> <br><br>
    
        @php
        $x = explode(',',$data->cource);
        @endphp
        
        
        cource:<input type="checkbox" name="chk[]" value="c" {{in_array('c',$x)?'checked':''}}>c
                <input type="checkbox" name="chk[]" value="c++" {{in_array('c++',$x)?'checked':''}}>c++
                <input type="checkbox" name="chk[]" value="python" {{in_array('python',$x)?'checked':''}}>python
                <input type="checkbox" name="chk[]" value="java" {{in_array('java',$x)?'checked':''}}>java
                <input type="checkbox" name="chk[]" value=".net" {{in_array('.net',$x)?'checked':''}}>.net<br><br>

        <img src="{{asset('image/'.$data->photo)}}" height="100px" width="100px">
        photo:<input type="file" name="photo"><br><br>
        <button>submit</button>
    </form>
    
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>