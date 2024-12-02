<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>step2</h2>
    <form action="step2code" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$lastid}}">
        email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
        picture:<input type="file" name="photo"><br><br>
        <button>save</button>
        <a href="{{'previous/' .$lastid}}">previous</a>
       
        
    </form>
</body>
</html>