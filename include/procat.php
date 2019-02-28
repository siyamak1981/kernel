
<?php 
function addproductCat($data){
    $connect = config();
    $sql = "INSERT INTO `product-cat`(`title`,`sort`, `status`) VALUES ('$data[title]','$data[sort]','$data[status]')";
    // var_dump($sql);die;
    mysqli_query($connect,$sql); 
}
    
function listproductadmin() {
    $connect= config();
    $sql = "SELECT * FROM `product-cat`";
    $row = mysqli_query($connect, $sql);
    while($res=mysqli_fetch_assoc($row)) {
        $result[]=$res;
    }
    return $result;

}
    
function deletecat($id) {
    $connect = config();
    $sql =  "DELETE FROM `product-cat` WHERE `product-cat`.`id` = $id";
    $row = mysqli_query($connect, $sql);
   
}
function showeditcat($id) {
    $connect= config();
    $sql = "SELECT * FROM `product-cat` WHERE id=$id";
    $row = mysqli_query($connect, $sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
   
}
function editcat($data,$id) {
    $connect= config();
    $sql = "UPDATE `product-cat` SET `title` = '$data[title]', `sort` = '$data[sort]', `status` = '$data[status]' WHERE `product-cat`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}
//end product-cat//
?>

