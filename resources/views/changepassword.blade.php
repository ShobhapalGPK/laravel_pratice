<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="changepasswordcode" method="post">
        @csrf
        <h3> changepassword </h3>
        oldpassword:<input type="password" name="opass"><br><br>
        newpassword:<input type="password" name="npass"><br><br>
        coformpassword:<input type="password" name = "cpass"><br><br>
        <button>changepassword</button>
    </form>
</body>
</html>