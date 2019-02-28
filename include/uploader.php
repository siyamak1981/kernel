<?php 
function file_uploader($file)
{
    $file = $_FILES[$file];
    $size=$file['size'];
    $filename = $file['name'];
    $array = explode(".", $filename);
    $ext = end($array);
    $newname = "file-" . rand() . "." . $ext;
    $from = $file['tmp_name'];
    $to ="uploader/upload"."/" . $newname;
    move_uploaded_file($from, $to);
    return $a=array($to,$size);
   
}

function add_file($data, $img, $size)
{
    $connect = config();
    $sql = "INSERT INTO `uploader_tbl` (`title`, `img`, `size`) VALUES ('$data[title]','$img','$size')";
 
  
    mysqli_query($connect, $sql);
}



function list_file()
{
    $connect = config();
    $sql = "SELECT * FROM `uploader_tbl`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

?>