<h1><b>Student List</h1></b>
<table border="1">
<tr>
<td>Email</td>
<td>Password</td>
<td>Operation</td>

</tr>
@foreach($anupam as $anupams)
<tr>

<td>{{$anupams['email']}}</td>
<td>{{$anupams['password']}}</td>
<td><a href="delete/{{ $anupams->email }}">Delete</a>
<a href="edit/{{$anupams->email}}">Edit</a></td>

</tr>
@endforeach
</table>