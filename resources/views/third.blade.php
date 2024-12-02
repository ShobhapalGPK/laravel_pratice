<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thirdcode" method="post" enctype="multipart/form-data">
        @csrf
        name:<input type="text" name="name"><br><br>
        email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>

        gender:<input type="radio" name="gnd" value="male">male
               <input type="radio" name="gnd" value="female">female<br><br>

         city:<select name="city">
            <option>select city</option>
            <option>kanpur</option>
            <option>lucknow</option>
            <option>delhi</option>
            <option>allahbad</option>
         </select><br><br>
         
         cource:<input type="checkbox" name="chk[]" value="c">c
                 <input type="checkbox" name="chk[]" value="c++">c++
                 <input type="checkbox" name="chk[]" value="php">php
                 <input type="checkbox" name="chk[]" value="python">python
                 <input type="checkbox" name="chk[]" value="java">java<br><br>
          
          photo:<input type="file" name="photo"><br><br>
          <button>submit</button>       
    </form>
</body>
</html>