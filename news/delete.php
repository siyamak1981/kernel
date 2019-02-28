<?php
$id=$_GET['id'];
deletenews($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=news&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=news&p=list");
   exit();
}

?>