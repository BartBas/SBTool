@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
<head>
    <title>PHP Test</title>
</head>
<body>



<label for="cars">Choose a car:</label>
<select name="cars" id="cars" form="carform">
    @foreach($table as $ships)
        <option value={{$ships('EN')}}>{{$ships('EN')}}</option>
    @endforeach
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
</select>




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
