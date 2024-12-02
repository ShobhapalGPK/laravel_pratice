<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
           <th>id</th>
           <th>name</th>
           <th>email</th>
           <th>password</th>
           <th>gender</th>
           <th>city</th>
           <th>cource</th>
           <th>address</th>
           <th>picture</th>
           <th>delete</th>
           <th>edit</th>
        </tr>
        <tbody>
            @foreach($data1 as $x)
            <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
            <td>{{$x->email}}</td>
            <!-- <td>{{$x->email}}</td> -->
            <td>{{$x->password}}</td>
            <td>{{$x->gender}}</td>
            <td>{{$x->city}}</td>
            <td>{{$x->cource}}</td>
            <td>{{$x->address}}</td>
            <td><img src="{{asset('image/'.$x->picture)}}" height="100px"  width="100px"></td>
            <td><a href="{{'deletesecondform/'.$x->id}}">delete</a></td>
            <td><a href="{{'editsecondform/'.$x->id}}">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>