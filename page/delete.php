<?php
$id=$_GET['id'];
delete_page($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=page&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=page&p=list");
   exit();
}

?>