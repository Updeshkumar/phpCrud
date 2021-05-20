<h1>Update Member</h1>
<form action="/update/{{$data->email}}" method="POST">
@csrf
<label for="email"><b>Email</b></label>
<input type="text" name="email" id="email" value="{{$data->email}}"><br><br>
<label for="password"><b>Password</b></label>
<input type="password" id="password" name="password" value="{{$data->password}}"><br><br>
<button for="submit"><b>Update</b></button>
</form>