<?php
$konek = mysqli_connect("localhost","root","","login");

function query($query){
    global $konek;
    $result = mysqli_query($konek,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}
$levels = query("SELECT * FROM login_level");

// nambah data
function tambah($data)
{
    global $konek;
    $id = ($data["id"]);
    $level1 = htmlspecialchars($data["level"]);
    $username1 = strtolower(htmlspecialchars($data["username"]));
    $password1 = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $query = "INSERT INTO login_level
                VALUES ('$id','$username1','$password1','$level1','$email',now(),'')";
    mysqli_query($konek,$query);
    return mysqli_affected_rows($konek);
}

function hapus($id)
{
    global $konek;
    $query2 = "DELETE FROM login_level WHERE id = '$id'";
    mysqli_query($konek,$query2);
    return mysqli_affected_rows($konek);
}

function jumlah_data($i)
{
    global $levels;
    $i=0;
foreach ($levels as $level)
{
    $id[] = $level["id"];
    $username[] = $level["username"];
    $password[] = $level["password"];
    $level_login[] = $level["level"];
    $email[] = $level["email"];
    return $i;
}
}

function ubah($data){
    global $konek;
    $id = ($data["id"]);
    $level = htmlspecialchars($data["level"]);
    $username = strtolower(htmlspecialchars($data["username"]));
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $time = ($data["time"]);
    $query = "UPDATE login_level SET
                level = '$level',
                username = '$username',
                password = '$password',
                email = '$email'
                WHERE id = '$id'
                ";
    mysqli_query($konek,$query);
}
?>