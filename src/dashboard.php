<?php
include "config.php";
if(!isset($_SESSION['email'])){
   header('Location: ../index.php');
}
else{
    $email = $_SESSION['email'];
    $sql_query = "SELECT * FROM users WHERE email='".$email."'";
    $data = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_assoc($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../styles/dashboard.css" />
		<script
			src="https://code.jquery.com/jquery-3.6.0.min.js"
			integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"
		></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <nav class="navbar navbar-light bg-light shadow-sm position-fixed">
			<div class="container-fluid p-2">
				<div class="my-2 px-5">
					<a class="navbar-brand">Guvi</a>
				</div>
                <div class="my-2 px-5">
                <a class="btn btn-outline-danger" href="signout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
                
			</div>
		</nav>
		<div class="profile-wrapper">
		<div class="container mt-5">
    	<div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                <h1>Profile</h1>
                <img src="https://avatars.dicebear.com/api/pixel-art/f%3Dhe.svg" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3">
                    <h5 class="mx-2 mb-0 "><?php echo $row['username'] ?></h5>
                    <p class="mt-2">Email: <?php echo $row['email'] ?> </p>
                    <p>Date of Birth: <?php echo $row['Dob'] ?> </p>
                    <p>Phone: <?php echo $row['Phone'] ?> </p>
                    <div class="buttons"> <a href="editprofile.php" class="btn btn-outline-primary mx-2 px-4"><i class="fas fa-pencil-alt"></i>  Edit</a> <a href="changepass.php" class="btn btn-outline-warning mx-2 px-4"><i class="fas fa-pencil-alt"></i>  Change password</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
</body>
</html>