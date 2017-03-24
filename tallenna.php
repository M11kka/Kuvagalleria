<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php    
if(isset($_POST['submit'])) {

// process the form data

$tmp_file = $_FILES['kuva']['tmp_name'];
$target_file = basename($_FILES['kuva']['name']);
$upload_dir = "uploads";

// move_uploaded_file will return false if $tmp_file is
// not a valid upload file or if it cannot be moved for
// any other reason

if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
echo "File uploaded successfully.";
} else {
    echo $_FILES['kuva']['error'];
}
}
?>
</body>
</html>
