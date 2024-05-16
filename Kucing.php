<?php
session_start(); 
require_once"app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kucing</title>
<style>
    table, th, td{
        /* justify-content: center; */
	    border: 1px solid;
        width: 100%$_COOKIE;
        border-collapse: collapse;
        padding: 10px 30px;
    }
    table{
        width: 100%;
    }
    header {
    background-color: #000;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #e50914;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

</style>

</head>
<body>
<header>
        <div class="container">
            <div class="logo">  Data Kucing</div>
            <nav>
                <ul>
                    <li><a href="index.php" class="a-btn">kembali</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <h1>Riwayat Kucing</h1>
    <a href="kucing-tambah.php">Tambah Kucing </a>

    <br>
    <br>
   <?php if (isset($_SESSION['BERHASIL_TAMBAH_KUCING'])): ?>
    <p><?= $_SESSION['BERHASIL_TAMBAH_KUCING'] ?></P>
    <?php session_unset(); ?>
    <?php endif; ?>

    <table>

        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kucing</th>
                <th>Nama Kucing</th>
                <th>Harga Kucing</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no_urut = 0;
            ?>
            
        <?php foreach ($p as $k => $v) :  $no_urut++;?>
            <tr>
                <td><?= $no_urut ?></td>
                <td><?= $v['nama_kucing'] ?></td>
                <td><?= $v['jenis_kucing'] ?></td>
                <td><?= $v['harga_kucing'] ?></td>
                <td>
                    <a href="<?= "/kucing-detail.php?id={$v['id']}" ?>">detail</a>
                    <a href="<?= "/kucing-edit.php?id={$v['id']}" ?>">edit</a>
                    <a href="<?= "/kucing-hapus.php?id={$v['id']}" ?>">delete</a>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>