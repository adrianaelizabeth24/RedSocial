<?php
/**
 * Created by PhpStorm.
 * User: Omar García
 * Date: 11/22/15
 * Time: 7:58 PM
 */

session_start();
$userId = $_SESSION['userId'];

$Pfile = isset($_FILES["profilePicture"]["name"])? $_FILES["profilePicture"]["name"] : "";
$Pfile_tmp = isset($_FILES["profilePicture"]["tmp_name"])? $_FILES["profilePicture"]["tmp_name"] : "";
    require '../model/queryUploadProfilePicture.php';

    $target_dir = "../Pictures/profiles/";
    $target_file = $target_dir . basename($userId.$Pfile);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if(!getimagesize($Pfile_tmp)){
        header("location: ../view/profile_ppic.php");
    }

    // Check if image file is a actual image or fake image
    //if(isset($_POST["submit"])) {
    $check = getimagesize($Pfile_tmp);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    //}

    // Check if file already exists
    if (file_exists($target_file)) {
        //echo "Sorry, file already exists.";
        //$uploadOk = 0;
    }
    // Check file size
    if ($Pfile["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {

        if(upload_img($Pfile_tmp, $target_file, $Pfile, $userId))
        {
            header("location: ../view/home.php");

        }
        else
        {
            echo "Sorry, there was an error uploading your file.";

        }
    }

