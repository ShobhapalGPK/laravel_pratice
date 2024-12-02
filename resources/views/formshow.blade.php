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
            <th>mobile</th>
            <th>gender</th>
            <th>city</th>
            <th>cource</th>
            <th>photo</th>
            <th>action</th>
            <th>action</th>
        </tr>
        <tbody>
            @foreach($data as $x)
            <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->name}}</td>
                <td>{{$x->email}}</td>
                <td>{{$x->password}}</td>
                <td>{{$x->mobile}}</td>
                <td>{{$x->gender}}</td>
                <td>{{$x->city}}</td>
                <td>{{$x->cource}}</td>
                <td><img src="{{asset('image/' .$x->photo)}}" height="150px" width="150px"></td>
                <td><button><a href="{{'deleteform/'.$x->id}}">delete</a></button></td>
               <td><button><a href="{{'editform/'.$x->id}}">edit</a></button></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>