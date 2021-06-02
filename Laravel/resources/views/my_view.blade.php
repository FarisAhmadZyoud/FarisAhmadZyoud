<!DOCTPE html>

<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>address</td>
<td>street </td>
<td>state </td>
<td>zip </td>


</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id  }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->state }}</td>
<td>{{ $user->street  }}</td>
<td>{{ $user->zip  }}</td>

</tr>
@endforeach
</table>
</body>
</html>