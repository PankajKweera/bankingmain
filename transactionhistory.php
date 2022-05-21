<title>Ease Bank | Transaction History</title>
<link rel="stylesheet" type="text/css" href="css/table.css">

	<!-- Header & Navbar -->
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<style>
    body{
        background-color: #e0e0e0;
        position: relative;
    }
    #footer{
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>


	<!-- Transaction History Table -->
<div class="container table-container">
    <h2 class="text-center pt-4 pb-2" style="font-weight: bold;">Transaction History</h2>
    <table class="table table-hover table-borderless">
    	<thead class="table-dark" style="color : white;">
        	<tr>
            	<th class="text-center">S.No.</th>
            	<th class="text-center">Sender</th>
            	<th class="text-center">Receiver</th>
            	<th class="text-center">Amount</th>
            	<th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        	<?php
            	include 'includes/config.php';
	            
	            $sql ="select * from transaction";
	            $query =mysqli_query($conn, $sql);

    	        while($rows = mysqli_fetch_assoc($query)){
        	?>
            <tr>
            	<td class="py-2"><?php echo $rows['sno']; ?></td>
            	<td class="py-2"><?php echo $rows['sender']; ?></td>
            	<td class="py-2"><?php echo $rows['receiver']; ?></td>
            	<td class="py-2"><?php echo $rows['balance']; ?> </td>
            	<td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>    
        	<?php } ?>
        </tbody>
    </table>
</div>

	<!-- Footer -->
<?php include "includes/footer.php"; ?>