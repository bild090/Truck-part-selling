<?php
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])){
        $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "file in an image : ".$check["mime"]."<br>";
            $uploadOk=1;
        }
        else{
            echo"File is not image ";
            $uploadOk=0;
        }
        //check if file alredy exists
        if(file_exists($target_file)){
            echo "sorry file has been uploaded!";
            $uploadOk=0;
        }

        //check file size
        if($_FILES["fileToUpload"]["size"] > 500000){
            echo " sorry your file is big";
            $uploadOk=0;
        }

        //limit image type

        if($imageFileType != "Jpg" && $imageFileType != "gif" && $imageFileType != "Jpeg" && $imageFileType != "png"){
            echo "sorry we only accepts Jpg , gif, Jpeg or png";
            $uploadOk=0;
        }

        if($uploadOk == 0){
            echo "sorry your file was not uploaded";
        }
        else{
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
                echo "file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded";
            }
            else{
                echo "sorry there was an error uploading your file";
            }
        }
}
?>