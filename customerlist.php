<title>Ease Bank | Customer List</title>
<link rel="stylesheet" type="text/css" href="css/table.css">

	<!-- Header & Navbar -->
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<body style="background-color: #e0e0e0;">


	<!-- Users table -->
<div class="container table-container">
    <h2 class="text-center pt-4 pb-2" style="font-weight: bold;">Customer List</h2>
    <table class="table table-hover table-borderless">
    	<thead class="table-dark" style="color : white;">
        	<tr>
            	<th scope="col" class="text-center">ID</th>
            	<th scope="col" class="text-center">Name</th>
            	<th scope="col" class="text-center">Email</th>
            	<th scope="col" class="text-center">Balance</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        		include "includes/config.php";

				$sql ="select * from users";
				$result = mysqli_query($conn, $sql);
        		
        		while($rows = mysqli_fetch_assoc($result)){
        	?>
        	<tr>
            	<td name = "id"><?php echo $rows['id']; ?></td>
            	<td>
                    <a href="transfermoney.php?id=<?php echo $rows['id']; ?>">
                        <?php echo $rows['name']; ?>
                    </a>
                </td>
            	<td><?php echo $rows['email']; ?></td>
            	<td><?php echo $rows['balance']; ?></td>
            </tr>    
        	<?php } ?>
        </tbody>
    </table>
</div>

    <!-- Footer -->
<?php include "includes/footer.php"; ?>