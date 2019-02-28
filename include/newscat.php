
<?php 
function addnewsCat($data){
    $connect = config();
    $sql = "INSERT INTO `news_cat`(`title`) VALUES ('$data[title]')";
    // var_dump($sql);die;
    mysqli_query($connect,$sql); 
}
    
function  listnewscatdmin() {
    $connect= config();
    $sql = "SELECT * FROM `news_cat`";
    $row = mysqli_query($connect, $sql);
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}
    
function deletenewscat($id) {
    $connect = config();
    $sql =  "DELETE FROM `news_cat` WHERE `news_cat`.`id` = $id";
    $row = mysqli_query($connect, $sql);
   
}
function showeditnewscat($id) {
    $connect= config();
    $sql = "SELECT * FROM `news_cat` WHERE id=$id";
    $row = mysqli_query($connect, $sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
   
}
function editnewscat($data,$id) {
    $connect= config();
    $sql = "UPDATE `news_cat` SET `title` = '$data[title]' WHERE `news_cat`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}
//end news_cat//
?>

