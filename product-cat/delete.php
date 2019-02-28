<?php
$id=$_GET['id'];
deletecat($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=product-cat&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=product-cat&p=list");
   exit();
}


?>