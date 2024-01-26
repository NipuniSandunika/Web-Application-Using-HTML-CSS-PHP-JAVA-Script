<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql = "DELETE FROM s15657_tb WHERE ID = ".$_GET['id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: view.php");
}
?>
