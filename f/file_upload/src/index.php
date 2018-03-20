<html>
<body>
Thumbnail: <img src="<?=$_COOKIE[$cookie_name]?>"><br>
<form action="file_upload/upload.php" method="post" enctype="multipart/form-data">
Upload a file: <input type="file" name="fileToUpload"><br>
Check if a valid image <input type="checkbox" name="check_valid_image" value="true"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>