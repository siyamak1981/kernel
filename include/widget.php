<?php 
function add_widget($data, $img)
{
    $connect = config();
    $sql = "INSERT INTO `widget_tbl` (`title`, `text`, `img`) VALUES ('$data[title]', '$data[text]', '$img')";
    mysqli_query($connect, $sql);
}



function list_widget_admin()
{
    $connect = config();
    $sql = "SELECT * FROM `widget_tbl`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}




function delete_widget($id)
{
    $connect = config();
    $sql = "DELETE FROM `widget_tbl` WHERE `widget_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}


function show_edit_widget($id)
{
    $connect = config();
    $sql = "SELECT * FROM `widget_tbl` WHERE id=$id ";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;

}

function edit_widget($data, $id, $img, $oldpic)
{

    if ($_FILES[$img]['name'] != '') {
        $a = explode("/", $oldpic);
        $total = count($a);
        $folder = $a[$total - 3];

        $pic = uploader($img, "images/widget/", $folder, "widget");
    } else {
        $pic = $oldpic;
    }

    $connect = config();
    $sql = "UPDATE `widget_tbl` SET `title` ='$data[title]', `text` =  '$data[text]',`img` = '$pic'  WHERE `widget_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}




function list_widget_default()
{
    $connect = config();
    $sql = "SELECT * FROM `widget_tbl`";
    $row = mysqli_query($connect, $sql);

    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;

}

 ?>