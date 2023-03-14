<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreamy Travel</title>
    <link rel="stylesheet" href="Signups.css">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script>
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

</style>
    
</head>
<body>

<div class="container-fluid" id="background">
<div class="row">
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
<h1 class="hh1">Flavorita</h1>	
</div>
</div>



<div class="row">

	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4" id="form_1">
		
		<form action="authentication.php" method="POST" class="form">
<label id="l01">Sign Up</label><br><br>

<label id="l02">First Name</label><br>
<input type="text" name="firstname" placeholder="Type Your First Name" id="i01"><br><br>
<label id="l05"> User Name</label><br>
<input type="text" name="username" placeholder="Type Your User Name" id="i04"><br><br>
<label id="l06">Password</label><br>
<input type="password" name="password" placeholder="Type Your Password" id="i05"><br><br>
<input type="submit" name="submit" id="i06">

</form>
<h3 class="h03">Already Have an Account?<a href="login.php">Login</a></h3>

		
		

	
	
	
</div>
</div>




</div>








</body>
</html>