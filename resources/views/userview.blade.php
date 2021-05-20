<h1><b>Submit Form</b></h1>
<form action="ram" method="POST">
@csrf
<label for="email"><b>Email</b></label>
<input type="text" name="email" id="email" placeholder="Enter Email"> 
<br><br>
<label for="password"><b>Password</b></label>
<input type="password" name="password" id="password" placeholder="Enter Password">
<br><br>
<button type="submit">Submit</button>
</form>