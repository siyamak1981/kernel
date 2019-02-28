<?php 
function addpro($data, $img)
{
    $connect = config();
    $sql = "INSERT INTO `product-tbl`(`title`, `text`, `procat`,`img`) VALUES ('$data[title]', '$data[text]', '$data[procat]', '$img')";
    mysqli_query($connect, $sql);


}


function procat()
{
    $connect = config();
    $sql = "SELECT * FROM `product-cat`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}



function listproadmin()
{
    $connect = config();
    $sql = "SELECT * FROM `product-tbl`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}

function selectProCat($catid)
{
    $connect = config();
    $sql = "SELECT * FROM `product-tbl` WHERE `procat`= $catid ";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];

}


function deletepro($id)
{
    $connect = config();
    $sql = "DELETE FROM `product-tbl` WHERE `product-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}


function showeditpro($id)
{
    $connect = config();
    $sql = "SELECT * FROM `product-tbl` WHERE id=$id";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;

}
function editpro($data, $id, $img, $oldpic)
{

    if ($_FILES[$img]['name'] != '') {
        $a = explode("/", $oldpic);
        $total = count($a);
        $folder = $a[$total - 3];

        $pic = uploader($img, "images/products/", $folder, "product");
    } else {
        $pic = $oldpic;
    }
    $connect = config();
    $sql = "UPDATE `product-tbl` SET `title` ='$data[title]', `text` =  '$data[text]', `procat` = '$data[procat]', `img` = '$pic'  WHERE `product-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);



}

function listprodefault()
{
    $connect = config();
    $sql = "SELECT * FROM `product-tbl`  ";
    $row = mysqli_query($connect, $sql);

    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;

}

?>