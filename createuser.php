<title>Ease Bank | Create User</title>
<link rel="stylesheet" type="text/css" href="css/createuser.css">

	<!-- Header & Navbar -->
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<?php
	include "includes/config.php";
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
    	$email=$_POST['email'];
    	$balance=$_POST['balance'];
    	$sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    	$result=mysqli_query($conn,$sql);
    	if($result){
            echo "<script> alert('Hurray! User created');
                      window.location='customerlist.php';
                  </script>";
    	}
	}	 
?>

<div class="container-fluid form-container">
	<form class="form" method="post">
		<h2 class="form-heading">Create New User</h2><br>
		<div class="input-data">
			<img class="form-img" src="images/user.png" alt="user-img"><br><br><br>
			<input class="input-field" name="name" type="text" placeholder="Full Name" autocomplete="off" required><br><br>
			<input class="input-field" name="email" type="email" placeholder="Email" autocomplete="off" required><br><br>
			<input class="input-field" name="balance" type="number" placeholder="Bank Balance" autocomplete="off" required><br><br><br>
			<button type="submit" name="submit" class="btn btn-lg btn-secondary">Create</button>
		</div>
	</form>
</div>

	<!-- Footer -->
<?php include "includes/footer.php"; ?>