<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql1 = "SELECT * FROM s15657_tb WHERE ID =".$_GET['id'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['updateB'])){
	$sql2 = "UPDATE s15657_tb SET Item_Name = '".$_POST['itemN']."',Item_Price = '".$_POST['itemP']."',Item_Quantity = '".$_POST['itemQ']."',Item_Status = '".$_POST['itemS']."',Date = '".$_POST['dt']."' WHERE ID ='".$_POST['id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM s15657_tb WHERE ID =".$_POST['id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['id'])&&!isset($_POST['updateB'])){
header("Location: view.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<style>
		body {
		  background-image: url('./images/update.jpg');
			}
	</style> 


	<table border=1 align='center'>
		<tr bgcolor=#500035>
			<td>ID</td>
			<td>Item Name</td>
			<td>Item Price</td>
			<td>Item Quantity</td>
			<td>Item Status</td>
			<td>Date</td>

		</tr>
		<form action='update.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='id' required value =".$row['ID']." readonly></td>";
			echo "<td><input type = 'text' name='itemN' required value =".$row['Item_Name']."></td>";
			echo "<td><input type = 'text' name='itemP' required value =".$row['Item_Price']."></td>";
			echo "<td><input type = 'text' name='itemQ' required value =".$row['Item_Quantity']."></td>";
			echo  "<td><select name='itemS' required value =".$row['Item_Status'].">
                           <option>Pending</option>
                           <option>Brought</option>
				   <option>Not Available</option>
		        </select>
			</td>";
			
			echo "<td><input type = 'date' name='dt' required value =".$row['Date']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="view.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>

</head>
<body>


</body>
</html>