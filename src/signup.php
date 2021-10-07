<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Guvi</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../styles/signup.css" />
		<script
			src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<nav class="navbar navbar-light bg-light shadow-sm position-absolute">
			<div class="container-fluid p-2">
				<div class="my-2 px-5">
					<a class="navbar-brand">Guvi</a>
				</div>
			</div>
		</nav>
		<div class="signup-wrapper">
			<div class="form-signup">
				<form>
					<h1 class="h3 mb-3 fw-normal">Sign up</h1>

					<div class="form-floating">
						<input
							name="name1"
							type="name"
							class="form-control"
							id="Name"
							placeholder="Name"
							required
						/>
						<label for="floatingInput">Name</label>
					</div>
					<div class="form-floating">
						<input
							name="dob1"
							type="date"
							class="form-control"
							id="DOB"
							placeholder="Date of Birth"
							required
						/>
						<label for="floatingInput">Date of Birth</label>
					</div>
					<div class="form-floating">
						<input
							name ="phone1"
							type="tel"
							class="form-control"
							id="PhoneNumber"
							placeholder="Phone Number"
							required
						/>
						<label for="floatingInput">Phone Number</label>
					</div>
					<div class="form-floating">
						<input
							name = "email1"
							type="email"
							class="form-control"
							id="Email"
							placeholder="name@example.com"
							required
						/>
						<label for="floatingInput">Email address</label>
					</div>
					<div class="form-floating">
						<input
							name="password1"
							type="password"
							class="form-control"
							id="Password"
							placeholder="Password"
							required
						/>
						<label for="floatingPassword">Password</label>
					</div>
					<div class="form-floating">
						<input
							type="password"
							class="form-control"
							id="cPassword"
							placeholder="Password"
							required
						/>
						<label for="cPassword">Confirm Password</label>
					</div>
					<p id="err_msg" class="text-danger"></p>
					<button id="register" class="w-100 btn btn-lg btn-primary" type="submit">
						Sign up
					</button>
					<p class="my-3">
						Already have an account<a class="mx-1" href="signin.php">Sign in</a>
					</p>
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function() {
$(".form-signup").submit(function (e) {
e.preventDefault();
});
$("#register").click(function() {
var name = $("#Name").val();
var email = $("#Email").val();
var password = $("#Password").val();
var cpassword = $("#cPassword").val();
var dob = $("#DOB").val();
var phone = $("#PhoneNumber").val();
if (name == '' || dob=='' || phone == '' || email == '' || password == '' || cpassword == '') {
	$("#err_msg").text("Please fill all the fields");
} else if ((password.length) < 8) {
	$("#err_msg").text("Password should atleast 8 character in length");
} else if (!(password).match(cpassword)) {
	$("#err_msg").text("Passwords doesn't match");
} else {
	$.ajax({
			url: "register-handler.php",
			type: "post",
			data: { name1: name,
					email1: email,
					dob1: dob,
					phone1: phone, 
					password1: password },
			success: function (response) {
						var msg = "";
						if (response == 1) {
							window.location = "signin.php?registered=1";
							} 
						else if(response == "Email exits") {
								msg = "Email already exists. Try signing in";
						}
						else{
							msg = "Error"
						}
							$("#err_msg").text(msg);
						},
			});
}
});
});
</script> 
