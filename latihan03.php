<?php
    $path = "upgambar/";
    if(isset($_POST["uploadfile"])){
        if($_FILES["gambar"]["error"]==0);
            $flname = $path . basename($_FILES["gambar"]["name"]);
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $flname);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php
if(isset($_POST["uploadfile"])){
    echo"<img src='".$flname."'>";;
}
?>

    <form action="latihan03.php" method="POST" enctype="multipart/form-data">
        <div>
            Upload Gambar<br>
            <input type="file" name="gambar">
        </div>
        
        <div>
            <input type="hidden" name="uploadfile" value="OK">
            <button type="submit">Upload Gambar</button>
        </div>

    </form>
</body>
</html>