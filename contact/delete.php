<?php
$id=$_GET['id'];
deletecontact($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=contact&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=contact&p=list");
   exit();
}

?>