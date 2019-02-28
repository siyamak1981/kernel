<?php 
function addnews($data, $img)
{
    $connect = config();
    $sql = "INSERT INTO `news-tbl` (`title`, `text`, `img`, `news_cat`) VALUES ('$data[title]', '$data[text]', '$img', '$data[news_cat]')";
    mysqli_query($connect, $sql);
}


function newscat()
{
    $connect = config();
    $sql = "SELECT * FROM `news_cat`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}



function listnewsadmin()
{
    $connect = config();
    $sql = "SELECT * FROM `news-tbl`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}



function selectnewsCat($catid)
{
    $connect = config();
    $sql = "SELECT * FROM `news_cat` WHERE `id`= $catid ";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];

}


function deletenews($id)
{
    $connect = config();
    $sql = "DELETE FROM `news-tbl` WHERE `news-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}


function showeditnews($id)
{
    $connect = config();
    $sql = "SELECT * FROM `news-tbl` WHERE id=$id ";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;

}

function editnews($data, $id, $img, $oldpic)
{

    if ($_FILES[$img]['name'] != '') {
        $a = explode("/", $oldpic);
        $total = count($a);
        $folder = $a[$total - 3];

        $pic = uploader($img, "images/news/", $folder, "news");
    } else {
        $pic = $oldpic;
    }

    // var_dump($pic); die;

    $connect = config();
    $sql = "UPDATE `news-tbl` SET `title` ='$data[title]', `text` =  '$data[text]', `news_cat` = '$data[news_cat]', `img` = '$pic'  WHERE `news-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}




function listnewsdefault()
{
    $connect = config();
    $sql = "SELECT * FROM `news-tbl`";
    $row = mysqli_query($connect, $sql);

    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;

}

?>