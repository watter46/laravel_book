<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <p>{{ $msg }}</p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">name and age</th>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name_and_age }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>
