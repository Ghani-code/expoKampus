<?php
// koneksi ke database
require 'function.php';
$konek = mysqli_connect("localhost","root","","login");

// ambil data dari table login_level
// ambil data (fetch) login_level dari object result
// mysqli_fetch_row() <- mengembalikan array numerik
// mysqli_fetch_assoc() <- mengembalikan array associative
// mysqli_fetch_array() <- mengembalikan keduanya
// mysqli_fetch_object()
// if(isset($_POST['submit']))
// {
//     $level_login = $_POST['level'];
//     switch ($level_login) {
//         case 'Admin':
//             header("location: admin.php");
//             exit;
//             break;
//         case 'User':
//             header("location: user.php");
//             exit;
//             break;
//     }
// }

if (isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $test = $_POST["test"];
    $nama = mysqli_query($konek, "SELECT * FROM login_level WHERE username = '$username'");
    $result  = mysqli_num_rows($nama);
    $password = mysqli_query($konek, "SELECT * FROM login_level WHERE password = '$password'");
    $result2  = mysqli_num_rows($password);

        }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        #salah{
            text-align: center;
            font-style: italic;
            color: red;
        }
        table {
            margin: 0px auto 0;
        }
        table,
        th,
        td,
        tr {
            border: 2px solid black;
            padding: 20px;
        }
        th{
            background-color: green;
        }
        .button {
            width: 100%;
        }
        select {
            width: 100%;
        }
        h1{
            text-align: center;
        }
        .login{
            text-align: center;
        }
        .bawah{
            padding-bottom: 0;
        }
    </style>
</head>

<body>
    <h1>- Halaman login -</h1><br>
    <?php if(isset($eror)) {?>
        <p id="salah">username/password salah</p>
        <?php }; ?>
        <form action="tangkap.php" method="post" >
            <table>
                <tr>
                    <th colspan="2">Form login</th>
                </tr>
                <tr>
                    <td>Anda masuk sebagai</td>
                    <td>
                        <select id="pilihan" name="level">
                            <option value="Divisi Acara">Divisi Acara</option>
                            <option value="BPH">BPH</option>
                            <option value="Divisi Logistik">Divisi Logistik</option>
                            <option value="Divisi Pubikasi">Divisi Pubikasi</option>
                            <option value="Divisi Satgas">Divisi Satgas</option>
                            <option value="Divisi Humas">Divisi Humas</option>
                            <option value="Divisi IT">Divisi IT</option>
                            <option value="Admin">Admin</option>
                            <option value="Divisi Danus">Divisi Danus</option>
                        </select>
                    </td>
                </tr>
                    <input id="test" name="test" hidden></input>
                <tr>
                    <td>username</td>
                    <td>
                        <input type="text" placeholder="masukan username..." name="username" id="masukan1" required
                            autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>password</td>
                    <td>
                        <input type="password" placeholder="masukan password..." name="password" id="masukan2" required
                            autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="bawah">
                        <button type="submit"  class="button" name="submit" onclick="list()">sign up</button><br>
                        <p class="login">Belum punya akun ? <a href="index.php">Sign up</a></p>
                    </td>
                </tr>
            </table>
        </form>
    <!-- tambah data -->
    <script type="text/javascript">
        function list()
            {var input = document.getElementById("pilihan").value;
            if (input === "Admin") {
                document.getElementById("test").value = 1;
            }
            else{
                document.getElementById("test").value = 2;
            }}
    </script>
</body>

</html>
