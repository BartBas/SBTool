@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<table>
    <tr>
    @foreach(array_keys($table[0]) as $keys)
        <th>{{$keys}}</th>
    @endforeach
    </tr>
@foreach($table as $row)
<tr>
    @foreach($row as $collum)
        <td>
            {{ $collum }}
        </td>
    @endforeach
</tr>
@endforeach
</table>
</body>
</html>
