
<?php
function addmenu($data){
    $connect = config();
    $sql = "INSERT INTO `menu-tbl`(`title`, `url`, `sort`, `status`, `child`) VALUES ('$data[title]','$data[url]','$data[sort]','$data[status]','$data[parent]')";
    mysqli_query($connect,$sql); 
}


function submenu(){
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl` WHERE `child`='0'";
    $row = mysqli_query($connect, $sql);
    
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}

function listmenu() {
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl`";
    $row = mysqli_query($connect, $sql);
    
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}

function selectParentMenu($child){
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl` WHERE id= $child ";
    $row = mysqli_query($connect, $sql); 
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletemenu($id) {
    $connect = config();
    $sql = "DELETE FROM `menu-tbl` WHERE `menu-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}
 function showedit($id) {
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl` WHERE id=$id";
    $row = mysqli_query($connect, $sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
    
}

function editmenu($data,$id) {
    $connect= config();
    $sql = "UPDATE `menu-tbl` SET `title` = '$data[title]', `url` = '$data[url]', `sort` = '$data[sort]', `status` = '$data[status]', `child` = '$data[parent]' WHERE `menu-tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
    

}
// برای صفحه ایندکس//
function listmenudefault() {
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl` WHERE `status`='1'  AND `child`='0' ORDER BY sort ASC";
    $row = mysqli_query($connect, $sql);
    
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}
function listsubmenudefault($id) {
    $connect= config();
    $sql = "SELECT * FROM `menu-tbl` WHERE status='1'  AND child='$id' ORDER BY sort ASC";
    $row = mysqli_query($connect, $sql);
    if(mysqli_num_rows($row)>0){
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }//برای ارور زیر ساب منو
    return $result;
    }
}
// endmenu//
?>