<?php
$id=$_GET['id'];
deletemenu($id);
// header ('location:dashboard.php?m=menu&p=list');
if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=menu&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=menu&p=list");
   exit();
}

?>