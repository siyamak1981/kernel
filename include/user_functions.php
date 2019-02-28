<?php

include_once "functions.php";
function user_login($data)
{
  $connect = config();
  $sql = "SELECT * FROM `siyamak` WHERE username = '$data[username]'";

  $row = mysqli_query($connect, $sql);
  $res = mysqli_fetch_assoc($row);
  if ($res['password'] == $data['password']) {
    
  $_SESSION['username']= $res['username'];
  header ("location:dashboard.php");
 
  } else {

    header ("location:admin.php?login=error");
  }
}


?>