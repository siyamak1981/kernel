<?php
session_start();
?>
<?php 
require("db.php");
if ($_SESSION['bilitu'] == 0) {
	header("location:admin.php");
}
$id = $_SESSION['bilitu'];

$sql = "SELECT * FROM `siyamak` WHERE id=$id  ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	$row = $result->fetch_assoc();
echo $row['username'];
// header ("location:dashoard.php");
}

?>
salam karbare aziz agha ya khanome <?php echo $_SESSION['username']; ?> man hastam user