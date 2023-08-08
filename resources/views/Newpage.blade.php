@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<table>
@foreach($table as $row)
<tr>
    @foreach($row as $collum)
        <th>
            {{ $collum }}
        </th>
    @endforeach
</tr>
@endforeach
</table>
</body>
</html>
