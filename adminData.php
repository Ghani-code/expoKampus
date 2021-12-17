
<?php require 'function.php';
$levels = query("SELECT * FROM login_level ORDER BY level");
$i=0;
jumlah_data($i);
foreach ($levels as $level)
{
    $id[] = $level["id"];
    $username[] = $level["username"];
    $password[] = $level["password"];
    $level_login[] = $level["level"];
    $email[] = $level["email"];
    $i++;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - page</title>
    <style>
        table,tr,td,th{
            border: 2px solid black;
            width: 10%;
        }
        table{
            width: 70%;
            text-align: center;
        }
        th{
            background-color: blueviolet;

        }
        h1{
            text-align: center;
        }
        table{
            margin: auto;
            margin-top: 50px;
        }
        button{
            width: 100%;
            padding: 9px 0 9px;
            background-color: blueviolet;
            color: black;
        }
    </style>
</head>
<body>
    <h1>- Halaman Admin -</h1>
    <table cellpadding = "20">
        <tr>
            <th colspan="2">Aksi</th>
            <th>username</th>
            <th>password</th>
            <th>E-mail</th>
            <th>role</th>
            <th>Aktivasi</th>
        </tr>
        <?php for ($a = 0; $a < $i; $a++) {?>
        <tr>
            <td><a href="hapus.php?id=<?= $id[$a]; ?>" style="color: red;" class="hapus">Hapus</a></td>
            <td><a href="ubah.php?id=<?= $id[$a]; ?>" style="blue: red;" class="ubah">Ubah</a></td>
            <td><?php echo $username[$a] ?></td>
            <td><?php echo $password[$a] ?></td>
            <td><?php echo $email[$a] ?></td>
            <td><?php echo $level_login[$a] ?></td>
            <td><input type="checkbox"></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="7"><a href="index.php"><button>Home</button></a></td>
        </tr>
    </table>
    <?php
if (isset($_POST["submit"]))
{
    ubah($_POST);
    header("Location: admin.php", true, 303);
} ?>
</body>
</html>