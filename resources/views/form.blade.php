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

        <form action="formcode" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Registration form</h1>
        name:<input type="text" name="name"><br><br>
        email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
        mobile:<input type="number" name="mobile"><br><br>
        gender:<input type="radio" name="gnd" value="male">male
                <input type="radio" name="gnd" value="female">female<br><br>

        city:<select name="city">
            <option>Lucknow</option>
            <option>kanpur</option>
            <option>mumbai</option>
            <option>delhi</option>
            <option>noida</option>
            <option>hariyana</option>
            <option>punjab</option>
        </select> <br><br>
        
        cource:<input type="checkbox" name="chk[]" value="c">c
                <input type="checkbox" name="chk[]" value="c++">c++
                <input type="checkbox" name="chk[]" value="python">python
                <input type="checkbox" name="chk[]" value="java">java
                <input type="checkbox" name="chk[]" value=".net">.net<br><br>

        photo:<input type="file" name="photo"><br><br>
        <button>submit</button>
    </form>
    
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>