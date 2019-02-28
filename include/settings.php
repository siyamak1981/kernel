
<?php
function settings() {
        $connect= config();
        $sql = "SELECT * FROM `settings`";
        $row = mysqli_query($connect, $sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
        
    }
        
function editsettings($data) {
    $connect= config();
    $sql = "UPDATE `settings` SET `title` = '$data[title]', `description` = '$data[description]' ";
    $row = mysqli_query($connect, $sql);
    

}
    

 ?>