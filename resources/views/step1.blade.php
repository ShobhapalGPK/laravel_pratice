<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>step1 page</h1>
    <form action="stepcode" method="post">
        @csrf
        name:<input type="text"  name="name"><br><br>
        city:<input type="text" name="city"><br><br>
        mobile:<input type="number" name="mobile"><br><br>
        <button>save</button>

    </form>
</body>
</html>