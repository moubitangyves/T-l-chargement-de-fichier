<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="fileUpload">Upload your file:</label>
  <input type="file" name="fileUpload" id="fileUpload">
  <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php
