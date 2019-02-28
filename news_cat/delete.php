<?php
$id=$_GET['id'];
deletenewscat($id);

if (headers_sent()) {
    die('<script>window.location="dashboard.php?m=news_cat&p=list";</script>');
}
else{
   header("Location:dashboard.php?m=news_cat&p=list");
   exit();
}


?>