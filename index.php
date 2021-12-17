<?php
// koneksi ke database
require 'function.php';


// ambil data dari table login_level
// ambil data (fetch) login_level dari object result
// mysqli_fetch_row() <- mengembalikan array numerik
// mysqli_fetch_assoc() <- mengembalikan array associative
// mysqli_fetch_array() <- mengembalikan keduanya
// mysqli_fetch_object()
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
            background-color: blue;
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
    <h1>- Halaman daftar -</h1><br>
    <p id="salah"></p>
        <form action="" method="post">
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
                <tr>
                    <td>E-mail</td>
                    <td>
                        <input type="email" placeholder="masukan alamat email..." name="email" id="masukan" required
                            autocomplete="off">
                    </td>
                </tr>
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
                        <input type="submit" value="Sign Up" class="button" name="submit"><br>
                        <p class="login">Sudah punya akun ? <a href="login.php">Log in</a></p>
                    </td>
                </tr>
            </table>
        </form>
    <!-- tambah data -->
    <script type="text/javascript">
        const submit = document.querySelector(".button")
        submit.addEventListener("click", function () {
            var input = document.getElementById("masukan1").value;
            var input2 = document.getElementById("masukan2").value;
            if (input === "" || input2 === "") {
                document.getElementById("salah").innerHTML = "Silahkan lengkapi form terlabih dahulu"
            }
            else{
                <?php
                    tambah($_POST);
                ?>
            }
        })
    </script>
</body>

</html>
