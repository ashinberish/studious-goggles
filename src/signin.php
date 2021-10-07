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
		<link rel="stylesheet" href="styles/signin.css" />
		<script
			src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
	<body>
		<nav class="navbar navbar-light bg-light shadow-sm position-absolute">
			<div class="container-fluid p-2">
				<div class="my-2 px-5">
					<a class="navbar-brand">Guvi</a>
				</div>
			</div>
		</nav>
		<div class="login-wrapper">
			<div class="form-signin">
				<form>
					<h1 class="h3 mb-3 fw-normal">Sign in</h1>
					<p id="reg_msg" class="text-success"></p>

					<div class="form-floating">
						<input
							type="email"
							class="form-control"
							id="Email"
							placeholder="name@example.com"
						/>
						<label for="floatingInput">Email address</label>
					</div>
					<div class="form-floating">
						<input
							type="password"
							class="form-control"
							id="Password"
							placeholder="Password"
						/>
						
						<label for="floatingPassword">Password </label>
					</div>
					

					<!-- <div class="checkbox mb-3">
						<label>
							<input type="checkbox" id="rememberme" value="1" /> Remember me
						</label>
					</div> -->
					<p id="err_msg" class="text-danger"></p>
					<button
						id="sign-in-btn"
						class="w-100 btn btn-lg btn-primary"
						type="submit"
					>
						Sign in
					</button>
					<p class="my-3">
						Don't have an account<a class="mx-1" href="signup.php">Sign up</a>
					</p>
				</form>
			</div>
		</div>
	</body>
	<script>
		$(document).ready(function () {
			if(window.location.search == "?registered=1"){
				$("#reg_msg").text("You have been registered sucessfully.");
			}
			$(".form-signin").submit(function (e) {
				e.preventDefault();
			});
			$("#sign-in-btn").click(function () {
				var email = $("#Email").val().trim();
				var pwd = $("#Password").val().trim();
				if (email != "" && pwd != "") {
					$.ajax({
						url: "auth-handler.php",
						type: "post",
						data: { email: email, password: pwd },
						success: function (response) {
							var msg = "";
							if (response == 1) {
								window.location = "Dashboard.php";
							} else {
								msg = "Invalid username and password!";
							}
							$("#err_msg").text(msg);
						},
					});
				}
			});
		});
	</script>
</html>
