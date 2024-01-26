<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM s15657_tb";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title> View </title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="shortcut icon" href="./images/favicon.ico" />

	<style>
		body {
		  background-image: url('./images/bg2.jpg');
			}
		#submit{
            width:20%;
        }

	</style> 

	</head>
	
<body>
	<table border=1 padding=00px align='center' width=100%>
		<tr bgcolor=#500035>
			<td>ID</td>
			<td>Item Name</td>
			<td>Item Price</td>
			<td>Item Quantity</td>
			<td>Item Status</td>
			<td>Date</td>
			<td>Update</td>
			<td>Delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr bgcolor=#c40579>
			<td><?php echo $row['ID'] ?></td>
			<td><?php echo $row['Item_Name'] ?></td>
			<td><?php echo $row['Item_Price'] ?></td>
			<td><?php echo $row['Item_Quantity'] ?></td>
			<td><?php echo $row['Item_Status'] ?></td>
			<td><?php echo $row['Date'] ?></td>

			<?php echo "<td bgcolor=white><a href =update.php?id='".$row['ID']."' > update </a> </td>"?>
			<?php echo "<td bgcolor=white><a href =delete.php?id='".$row['ID']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="add.php"><button type="button" id="submit">Add</button></a>

<script type = "text/javascript" src="./js/main.js"></script>
	
</body>
</html>
