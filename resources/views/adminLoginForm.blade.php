<!DOCTYPE html>
<html>
<head><title>Admin Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<x-navigation />
<body>

<div class="hero-image" id="hi">


<div id="main">
  <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  <p><h1>ADMIN LOGIN PAGE</h1></p>
  <div class="hero-text">
    
  <form method="POST" action="adminLoginForm">
    <table id="f">
    @csrf
    <tr><td>LoginName:</td><td><input type="text" name="LoginName" required placeholder="Enter your LoginName here"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password" required placeholder="Enter your password here"></td></tr>
    
    <tr><td><input type="submit" value="LOGIN" name="submit">
		<input type="reset" value="RESET"></td></tr>
	</form>
	</table>
 
  </div>
</div>



<script src="{{url('/js/customerlogin.js')}}">

</script>
   
</body>
</html>
