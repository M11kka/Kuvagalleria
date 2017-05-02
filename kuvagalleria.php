<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="tallenna.php" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="kuva" ><br>
        <p>Kuvateksti:<input type="text" name="kuvateksti" ></p>
        <input type="submit" name="submit" value="Upload" /><br>
    </form>
</body>
</html>

