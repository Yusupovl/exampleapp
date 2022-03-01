<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="{{route('post_cities')}}" method="post">
        @csrf
        Son kiriting: <input type="number" name="number">
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>