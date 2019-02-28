<?php
$id=$_GET['id'];
deletepro($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=product&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=product&p=list");
   exit();
}

?>