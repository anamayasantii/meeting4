<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>

<?php
    if(isset($_POST["txUser"])){
        $usr = $_POST["txUser"];
        if($usr==""){
            echo"<div><h3 style='color:red;padding:5px;'>Username/Password anda salah</h3></div>";
        }
    }
    if(isset($_POST["txPaskey"])){
        $pwd = $_POST["txPaskey"];
        if($pwd==""){
            echo"<div><h3 style='color:red;padding:5px;'>Username/Password anda salah</h3></div>";
        }
    }
    ?>
    <form action="latihan02.php" method="POST">
    <div>
        User Name<br>
        <input type="text" id="txUser" name="txUser">
    </div>

    <div>
        Password<br>
        <input type="password" id="txPaskey" name="txPaskey">
    </div>

    <div>
        <button type="submit">Log In</button>
        <a href="daftar.php">Daftar</button>
    </div>
    </form>
</body>
</html>