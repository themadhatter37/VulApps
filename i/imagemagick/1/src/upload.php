<?php
$target_dir = "/uploads/";
$target_file = $target_dir . basename($_FILES['upfile']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo(basename($_FILES['upfile']['name']),PATHINFO_EXTENSION));
if(isset($_POST['submit'])) {
	if(isset($_POST['check_valid_image'])) {
		$check = getimagesize($_FILES['upfile']['tmp_name']);
		if($check !== false) {
		       echo "File is an image - " . $check['mime']."<br>";
		       $uploadOk = 1;
		} else {
		       echo "File is not an image."."<br>";
		       $uploadOk = 0;
		}
	}
        if ($imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed"."<br>";
                $uploadOk = 0;
        }
        if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded."."<br>";
        } else {
                $image = new Imagick($_FILES['upfile']['tmp_name']);
                $image->thumbnailImage(100,100);
                if ($image->writeImage($target_file)) {
                        setcookie('image_path',$value=$target_file, $path="/");
                        echo "The file ". basename($_FILES['upfile']['name']). " has been uploaded to " . $target_file."<br>";
                } else {
                        echo "Sorry, there was an error uploading your file."."<br>";
                }
        }
}
?>
<a href="../poc.php">Return to main</a>
