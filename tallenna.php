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
$kuvateksti = $_POST['kuvateksti'];

// move_uploaded_file will return false if $tmp_file is
// not a valid upload file or if it cannot be moved for
// any other reason

 if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
   	echo "File uploaded successfully.";
   	$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "miikka123");
	$query = "insert into kuvat (nimi, sijainti, kuvateksti) values (\"$target_file\", \"$upload_dir\", '$kuvateksti');";
echo $query;
	
	$result = mysqli_query($mysql_yhteys, $query)
        or die("Virhe: " . mysqli_error($mysql_yhteys));

	// mysqli_free_result($result);
	mysqli_close($mysql_yhteys);  

 } else {
   echo $_FILES['kuva']['error'];
 }
}
?>
</body>
</html>
