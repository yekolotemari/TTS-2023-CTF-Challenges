<?php
$target_dir = "uploads/";
$uploadOk =1;


$denylist = array("php","php2","php3","php4","php5","php6","php7","php8","phps","pht","phtm","phtml","pgif","shtml","phar","inc","hphp","ctp","jpg","png","gif",);

if(isset($_POST["submit"])){

    $target_file = "uploads/" . basename($_FILES["cv"]["name"]);
    $filename = $_FILES["cv"]["name"];
    $uploadOk = 1;


    if($filename == ""){
        echo ("File upload not successful");
        $uploadOk = 0;
    
    }


    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if(in_array($ext,$denylist)){
        echo("This file is not allowed!");
        $uploadOk = 0;
    }

    if($_FILES["cv"]["size"] > 5000000){
        echo ("Please choose a smaller file size.");
        $uploadOk = 0;
    }

    if($uploadOk){
        $moved = move_uploaded_file($_FILES["cv"]["tmp_name"],$target_file);
        if($moved){
            echo("File successfully saved @ <a href='uploads/$filename'>uploads/$filename</a>.");

        }else{
            echo("Sorry, file upload was unsuccessfull.");
            
        }
    }
}

?>