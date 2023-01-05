<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    <h1>products</h1>
    <hr>
    <br>
    <table border=3>
                <tr>
                    <th>Title</th>
                    <th>Discription</th>
                    <th>Action</th>
                </tr>
                @foreach ($product as $products)
                <tr>
                    <td>{{$products->title}}</td>
                    <td>{{$products->discription}}</td>
                <td>
                    <a href="edit/{{$products->id}}">edit</a>
                    <a href="delete/{{$products->id}}">delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <div><a href="create/">Create</a> </div>
        <br>
        <a href="logout/">logout</a>
</body>
</html>