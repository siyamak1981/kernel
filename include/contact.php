<?php 
function addcontact($data)
{
    $connect = config();
    $sql = "INSERT INTO `contact_tbl` (`name`, `email`, `subject`, `text`) VALUES('$data[name]', '$data[email]', '$data[subject]','$data[text]')";
    mysqli_query($connect, $sql);
}


function listcontactadmin()
{
    $connect = config();
    $sql = "SELECT * FROM `contact_tbl`";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}



function deletecontact($id)
{
    $connect = config();
    $sql = "DELETE FROM `contact_tbl` WHERE `contact_tbl`.`id` = $id";
    $row = mysqli_query($connect, $sql);
}


function showdetail($id)
{
    $connect = config();
    $sql = "SELECT * FROM `contact_tbl` WHERE id=$id ";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;

}
?>