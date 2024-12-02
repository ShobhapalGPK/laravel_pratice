<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>previous page</h1>
    <form action="../previouscode" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        name:<input type="text"  name="name"  value="{{$data->name}}"><br><br>
        city:<input type="text" name="city" value="{{$data->city}}"><br><br>
        mobile:<input type="number" name="mobile" value="{{$data->mobile}}"><br><br>
        <button>save</button>

    </form>
</body>
</html>