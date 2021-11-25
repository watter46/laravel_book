<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <p>{{ $msg }}</p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">mail</th>
                <th scope="col">age</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>
