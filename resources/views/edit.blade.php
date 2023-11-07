<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{--<a href="{{route('Index')}}" class="btn btn-info">back</a>--}}
<form action="  {{route('update', ['election'=> $data->id])}}" method="post">

    @csrf
    <lable>enter partyname</lable>
    <input type="text" value="{{$data->partyname}}"  name="partyname" placeholder="enter partyname">
    <br>
    <lable>enter name</lable>
    <input type="text" value="{{$data->name}}" name="name" placeholder="enter name">
    <br>
    <lable>enter age</lable>
    <input type="text" value="{{$data->age}}" name="age" placeholder="enter age">
    <br>
    <input type="submit" value="update"class="btn btn-warning w-25">



</form>

</body>
</html>
