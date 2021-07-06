<?php
//this is registration page
?>

<!DOCTYPE html>
<html>
<head><title>Registration Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{url('/css/admin.css')}}">
</head>
<body>
<x-navigation />

<div id="main">
  <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  <h2>Best Gallery In Town</h2>
  <p>This is Registration Page</p>
  @if($errors->any())
  @foreach($errors->all() as $err)
  <li>{{$err}}</li>
  @endforeach
  @endif
  <form method="post" action="AdminLogin">
  @csrf
    <table>
    <br>
    
    <tr><td>Name:</td><td><input type="text" name="admin" required placeholder="Enter your name here"></td>
    </tr>
    <tr><td>Email:</td><td><input type="email" name="email" required placeholder="Enter your email here"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password" required placeholder="Enter your password here"></td></tr>
    <tr><td>Address:</td><td><input type="text" name="address" required placeholder="Enter your address here"></td></tr>
    <tr><td>Contact No.:</td><td><input type="text" name="contact" required placeholder="Enter your contact no. here"></td></tr>
    <tr><td><input type="submit" value="REGISTER" name="submit" >
		<input type="reset" value="RESET"></td></tr>
	</form>
  
	</table>
</div>


<script src="{{url('/js/loginnav.js')}}"></script>

   
</body>
</html> 
