<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="secondlogincode" method="post">
        @csrf
        <h3>login form</h3>
        email :<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
        <button>login</button>
    </form>
    
</body>
</html>