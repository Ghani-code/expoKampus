<?php
require 'function.php';
$nama = $_GET['id'];
hapus($nama);
    ?>
    <script>
        alert("data berhasil dihapus");
    </script>
<?php header("Location: adminData.php", true, 303); ?>
