<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>

    <script>
    function doAction(){
        let id = document.querySelector('#id').value;
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/hello/json/' + id, true);
        xhr.responseType = 'json';
        xhr.onload = function(e) {
            if (this.status == 200) {
                let result = this.response;
                document.querySelector('#name').textContent
                    = result.name;
                document.querySelector('#mail').textContent
                    = result.mail;
                document.querySelector('#age').textContent
                    = result.age;
            }
        };
        xhr.send();
    }
    </script>
</head>
<body>
    <h1>Hello/Index</h1>
    {{-- <p>{{ $msg }}</p> --}}
    <div>
        <input type="number" id="id" value="1">
        <button onclick="doAction();">Click</button>
    </div>

    <ul>
        <li id="name"></li>
        <li id="mail"></li>
        <li id="age"></li>
    </ul>

    {{-- <table class="table">
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
    </table> --}}
</body>
</html>
