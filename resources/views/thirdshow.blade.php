<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>city</th>
            <th>cource</th>
            <th>photo</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        <tbody>
            @foreach($data2 as $x)
            <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->name}}</td>
                <td>{{$x->email}}</td>
                <td>{{$x->password}}</td>
                <td>{{$x->gender}}</td>
                <td>{{$x->city}}</td>
                <td>{{$x->cource}}</td>
                <td><img src="{{'image/'.$x->picture}}" height="100px" width="100px"></td>
                <td><a href="{{'thirddelete/'.$x->id}}">delete</a></td>
                <td><a href="{{'thirdedit/'.$x->id}}">edit</a></td>
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>