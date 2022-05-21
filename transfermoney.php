<?php
include 'includes/config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    // constraint to check input of negative value by user
    if (($amount)<0)
        echo "<script> alert('Oops! Negative values cannot be transferred') </script>";


    // constraint to check insufficient balance.
    else if($amount > $sql1['balance'])
        echo "<script> alert('Bad Luck! Insufficient Balance') </script>";


    // constraint to check zero values
    else if($amount == 0)
         echo "<script type='text/javascript'> alert('Oops! Zero value cannot be transferred') </script>";


    else{
        
        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);
             
        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);
            
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($conn,$sql);

        if($query){
            echo "<script> alert('Transaction Successful');
                    window.location='transactionhistory.php';
                </script>";
        }

        $newbalance= 0;
        $amount =0;
    }
}
?>

<title>Ease Bank | Transfer Money</title>
<link rel="stylesheet" type="text/css" href="css/table.css">

    <!-- Header & Navbar -->
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<body style="background-color: #e0e0e0;">

<div class="container table-container">
    <h2 class="text-center pt-4 pb-2" style="font-weight : bold;">Transfer Money</h2>
    <?php
        include 'includes/config.php';
        $sid=$_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "Error : ".$sql."<br>".mysqli_error($conn);
        }
        $rows=mysqli_fetch_assoc($result);
    ?>
    <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name'] ?></td>
                        <td class="py-2"><?php echo $rows['email'] ?></td>
                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <label><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'includes/config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            
                <div class="text-center" >
            <button class="btn btn-lg btn-secondary mt-3" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>
<br>

    <!-- Footer -->
<?php include "includes/footer.php"; ?>