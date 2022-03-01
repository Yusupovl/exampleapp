<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>








    <table border="1">
        <p>Saralangan</p>
        <tr>
            <th>№</th>
            <th>Citys</th>
        </tr>

        <@foreach ($city as $c) <tr>
            <td> {{$loop->iteration}}</td>
            <td>{{ $c }}</td>
            </tr>
            @endforeach

    </table>


    <table border="1">
        <p>Saralanmagan</p>
        <tr>
            <th>№</th>
            <th>Citys</th>
        </tr>

        <@foreach ($citys as $s) <tr>
            <td> {{$loop->iteration}}</td>
            <td>{{ $s }}</td>
            </tr>
            @endforeach

    </table>




</body>

</html>