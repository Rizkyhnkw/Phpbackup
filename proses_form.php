<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Proses</h1>
    <?php 
    echo "nama".$_POST['nama']."<br>";
    echo "nim".$_POST['nim']."<br>";
    echo "alamat".$_POST['alamat']."<br>";
    echo "kelamin".$_POST['kel']."<br>";
    echo "username".$_POST['username']."<br>";
    echo "email".$_POST['email']."<br>";
    echo "pw".$_POST['password']."<br>";
    echo "konfirm pw".$_POST['repass']."<br>";
    echo "target 1".$_POST['target1']."<br>";
    echo "t2".$_POST['target2']."<br>";
    echo "t3".$_POST['target3']."<br>";
    ?>
</body>
</html>