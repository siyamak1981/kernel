
<?php
function add_page($data){
    $connect = config();
    $sql = "INSERT INTO `page_tbl`(`title`, `keyword`, `description`, `body`) VALUES ('$data[title]','$data[keyword]','$data[description]','$data[body]')";
    mysqli_query($connect,$sql); 

}


function list_page_admin() {
    $connect= config();
    $sql = "SELECT * FROM `page_tbl`";
    $row = mysqli_query($connect, $sql);
    
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}

function delete_page($id) {
    $connect = config();
    $sql = "DELETE FROM `page_tbl` WHERE `page_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}
 function show_edit_page($id) {
    $connect= config();
  
    $sql = "SELECT * FROM `page_tbl` WHERE`page_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
    
}

function edit_page($data,$id) {
    $connect= config();
    $sql = "UPDATE `page_tbl` SET `title` = '$data[title]', `keyword` = '$data[keyword]', `description` = '$data[description]',`body` = '$data[body]' WHERE `page_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}
    
function detail_page($id) {
    $connect= config();
    $sql = "SELECT * FROM `page_tbl` WHERE id=$id";
    $row = mysqli_query($connect, $sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}

?>