<?php
//require 'mysql.php';

function upload_img($file_tmp_name, $target_file,$file_name,$userId)
{
    if (move_uploaded_file($file_tmp_name, $target_file)) {
        echo "The file ". basename($file_name). " has been uploaded.";

        //decir en la db cual es
        $conn = start_connection();
        $ffile = $userId.$file_name;
        $query = "UPDATE userinfo SET profilePic ='$ffile' WHERE userId='$userId'";
        mysqli_query($conn,$query);
        mysqli_close($conn);
        return true;
    } else {
        return false;
    }
}
?>