<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="Post" action="/forma">
        @csrf
        A: <input type="number" name="number1">
        B: <input type="number" name="number2">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>