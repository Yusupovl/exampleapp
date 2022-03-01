<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>





    <form action="{{route('view_cities')}}" method="post">
        @csrf

        @for($i=0;$i<$n;$i++) Shaxar {{$i+1}} <input type="text" name="city[]">
            @endfor
            <input type="submit" name="submit" value="submit">



    </form>

</body>

</html>