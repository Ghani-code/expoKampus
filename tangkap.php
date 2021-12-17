<?php
$konek = mysqli_connect("localhost","root","","login");
$lokasi = $_POST["test"];
$username = $_POST["username"];
$password = $_POST["password"];
$test = $_POST["test"];
$nama = mysqli_query($konek, "SELECT * FROM login_level WHERE username = '$username'");
$result  = mysqli_num_rows($nama);
$password = mysqli_query($konek, "SELECT * FROM login_level WHERE password = '$password'");
$result2  = mysqli_num_rows($password);
if ($result == 1 && $result2 == 1) {
    if ($lokasi == 1) {
        header("location: adminData.php", true, 303);
        exit;
    }
    else if($lokasi == 2){
        header("location: user.php", true, 303);
        exit;
    }
}
else{
    header("location: loginSalah.php", true, 303);
    exit;
}
?>