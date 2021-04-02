<?php
if(isset($_POST['submit-art'])){
    $file = $_FILES['file'];
    $name = $_POST["upload-name"];
    $price = $_POST["upload-price"];
   

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    require_once 'includes/functions.inc.php';

    if(in_array($fileActualExt, $allowed)) {
        
        if($fileError === 0) {
            
                if($fileSize < 5000000){
                    
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $imageName = $fileNameNew;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    uploadArt($name, $imageName, $price);
                   
                }
                else {
                    echo "Your file is too big!";
                }
        }
        else {
            echo "There was an error uploading your file!";
        }
    } 
    else {
        echo "You cannot upload files of this type!";
    }


}