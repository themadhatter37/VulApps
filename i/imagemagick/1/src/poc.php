<?php
$cookie_name = 'image_path';
$default_path = '../uploads/default.png';
if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name,$default_path, time() + (86400*30),"/");
}
?>
<html>
<body>
Thumbnail: <img src="<?=$_COOKIE[$cookie_name]?>"><br>
<form action="form/upload.php" method="post" enctype="multipart/form-data">
Upload a file: <input type="file" name="upfile"><br>
Check if a valid image <input type="checkbox" name="check_valid_image" value="true"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>