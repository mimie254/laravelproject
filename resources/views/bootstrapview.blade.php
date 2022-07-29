<!DOCTPE html>
<html>
<head>
<title>List</title>
<h1>LIST</h1>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>email</td>
<td>password</td>
<td>address</td>
<td>address_2</td>
<td>city</td>
<td>gender</td>
<td>operation</td>
</tr>
@foreach ($bootstraps as $bootstrap)
<tr>
<td>{{ $bootstrap->id }}</td>
<td>{{$bootstrap->email }}</td>
<td>{{ $bootstrap->password}}</td>
<td>{{ $bootstrap->address}}</td>
<td>{{ $bootstrap->address_2 }}</td>
<td>{{ $bootstrap->city }}</td>
<td>{{ $bootstrap->gender }}</td>
<td>
    <a href={{"delete/".$bootstrap['id']}}>Delete</a>
    <a href={{ "edit/".$bootstrap['id']}}>Edit</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>