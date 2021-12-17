<?php
require 'function.php';
// query data user
$id = $_GET["id"];
$user = query("SELECT * FROM login_level WHERE id = '$id'")[0];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
                <input type="text" value = "<?= $user["id"]?>" name="id" hidden>
                <input type="time" value = "<?= $user["time"]?>" name="time" hidden>
            <li>
                <label for="">E-mail</label>
                <input type="text" value = "<?= $user["email"]?>" name="email">
            </li>
            <li>
                <label for="">username</label>
                <input type="text" value = "<?= $user["username"]?>" name="username">
            </li>
            <li>
                <label for="">password</label>
                <input type="text" value = "<?= $user["password"]?>" name="password">
            </li>
            <li>
                <label for="">level</label>
                <input type="text" value = "<?= $user["level"]?>" name="level">
            </li>
        </ul>
        <input type="submit" value="Ubah" class="button" name="submit">
    </form>
<?php
if (isset($_POST["submit"]))
{
    ubah($_POST);
    ?>
    <script>
        alert("data berhasil diubah");
    </script><?php
    header("Location: adminData.php", true, 303);
} ?>

</body>
</html>