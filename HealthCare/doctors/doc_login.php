<!DOCTYPE html> 
<html> 

<head> 
	<title>Doctors Login</title> 
	<link rel="stylesheet"href="../style1.css"> 
		<link rel="stylesheet" href="../project.css"></link>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head> 

<body> 

	<style>
		body{
			background-image: url(../assets/doc_log_Bg.jpg);
			background-repeat: no-repeat;
			background-size:cover;
			background-attachment:fixed;
			min-height: 0%;
		}
		header{
			top: 01px;
		}
		.card2{
			opacity: 70%;
			border: 4px solid darksalmon;
		}
		.card2:hover{
			transform: scale(1.1);
			transition: ease-in-out;
			transition-duration: .4s;
			opacity: 100%;
		}
	</style>
	<nav class=" navbar navbar-light container-fluid" id="grad" style="margin-top: 0px;">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
    </nav>
</div>
&nbsp;
<br><br><br><br>

	<div class="main card2" style="height: 480px; background-image: linear-gradient( beige,bisque,lightcoral 99%);" > 
		<h1 class="mt-3" style="color: rgb(10, 10, 107);">Doctors Login</h1>
		<hr>
		<h3 style="color: rgb(92, 5, 92);">Enter your login credentials</h3> 
		<form action="process.php" method="POST"> 
			<label for="first" > 
				Username: 
			</label> 
			<input type="text"
				id="first"
				name="first"
				placeholder="Enter your Username" required> 

			<label for="password"> 
				Password: 
			</label> 
			<input type="password"
				id="password"
				name="password"
				placeholder="Enter your Password" required>
				<br> 

			<div class="wrap mt-4"> 
				<button class="btn btn-success"  name="Login"> Submit </button>
					
				
			</div> 
		</form> 
		
	</div> 


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body> 

</html>
