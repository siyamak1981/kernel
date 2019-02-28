<?php
$id=$_GET['id'];
delete_widget($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=widget&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=widget&p=list");
   exit();
}

?>