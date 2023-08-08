@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
<head>
    <title>PHP Test</title>
</head>
<body>


@foreach($table as $row)
    @if ($row->first)
        <p>    {{$row}} </p>
    @endif
    {{$row}} <br>
@endforeach
</body>
</html>
