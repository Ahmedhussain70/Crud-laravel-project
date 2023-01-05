<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ url('/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="text" name="title" value="{{$product->title}}">
        <input type="text" name="discription" value="{{$product->discription}}">
        <input type="submit" value="update">
    </form>
</body>
</html>