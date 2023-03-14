<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreamy Travel</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js">
	</script>
	<script src="jquery-3.6.1.min.js"></script>
</head>

<style>
.hh1
{
    color:black;
    font-size: 50px;
    font-weight: bold;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	padding-top: 38px;
	padding-left: 10px;

}

#background
{
    background-color: antiquewhite;
}

.hhhh1
{
	padding-top:30px;
}

.h03
{
	padding-top:50px;
}
</style>
    
<body>
    
<div class="container-fluid" id="background">
<div class="row">
<div class="col-xl-3 col-lg-3  col-md-3 col-sm-3" id="d01">
<h1 class="hh1">Flavorita</h1>	

	
</div>
</div>
<div class="row" id="d01">
	>
		<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4" id="form_1">


<h2 class="hhhh1">Login Page</h2><br>

<form action="authentication.php" method="POST">

<label>Please enter your login details</label><br><br>
<label id="l02">User Name</label><br>
<input type="text" name="username" id="i01"><br><br>
<label id="l03">Password</label><br>
<input type="text" name="password" id="i02"><br>
<input type="submit" name="login"  id="i06">
</form>

<h3 class="h03">Not a Member?<a href="signup.php" id="Sign_up">SignUp Now</a></h3>
</div>
</div>
	</div>
</body>
</html>