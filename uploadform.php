<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload Form</title>
</head>
<body>
<form action="uploadhandler.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>


</body>
</html>