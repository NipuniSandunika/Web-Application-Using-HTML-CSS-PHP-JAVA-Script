<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="shortcut icon" href="./images/favicon.ico" />

	<title>Add Item</title>

	<style>
        .get-message{
            max-width:80vw;
            max-height:fit-content;
            background-color:rgba(255,255,255,.5);
            margin:50px 50px;
            padding:10px 50px;
            border-radius:10px;
            font-size:24px;
            font-weight:bold;
        }

	 #submit{
            width:20%;
        }

	</style>
 

</head>


<body id="main">
       <ul>
    <li><a href="home.php">Home</a></li>
    <li> <a href="add.php">Add Store Items</a></li>
    <li> <a href="item.php">Popular Kids Item</a></li>
    <li> <a href="contact.php">Contact Director team</a></li>
    </ul>

<div class="get-message">
<h3 id="msg-heading" onmouseover="mouseOver()" onmouseout="mouseOut()"> Add the Item list </h3>
<form action='' method ='POST'>

<label> ID </label>
<input type= "text" name="id" required size="50%" placeholder="ex: KF1234">

<label> Item Name </label>
<input type= "text" name="itemN" required size="50%" placeholder="ex: Cap">
<br/>
<br/>


<label> Item Price</label>
<input type= "text" name="itemP" required size="50%" placeholder="ex: 1500">
<br/>
<br/>

<label> Item Quantity </label><br/>
<input type= "text" name="itemQ" required size="50%" placeholder="ex: 100">

<br/>
<br/>

<label>Item Status</label>
	    <select name="itemS" required>
                <option>Pending</option>
                <option>Brought</option>
		    <option>Not Available</option>
	   </select>
<br />
<br />

<label>Date</label>
<input type = "date" name="dt" required>

<br />
<br />
<input type='submit' id='submit' value="Save" name='signB'>
<a href="view.php"><button type="button" id='submit' >view</button>

</div>

<script type = "text/javascript" src="./js/main.js"></script>

</form>		
</body>
</html>
<?php
	if(isset($_POST['signB'])){

	$sql = "INSERT INTO s15657_tb (ID,Item_Name,Item_Price,Item_Quantity,Item_Status,Date) VALUES ('".$_POST['id']."','".$_POST['itemN']."','".$_POST['itemP']."','".$_POST['itemQ']."','".$_POST['itemS']."','".$_POST['dt']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Value Inserted') </script>";
else
echo"Value Not Inserted";

}

?>
