<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1bet</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>T/R</td>
                <td>Tashkilot nomi</td>
                <td>Tashkilot manzili</td>
                <td>Telefon raqami</td>
                <td>Amallar</td>
            </tr>
        </thead>
        <body>
            @foreach ($mardon as $mard)
            <tr>
                <td>{{ ($mardon->currentpage()-1)*$mardon->perpage()+($loop->index+1) }}</td>
                <td>{{$mard->name}}</td>
                <td>{{$mard->address}}</td>
                <td>{{$mard->phone}}</td>
            </tr>
            @endforeach
        </body>
    </table>
</body>
</html>
