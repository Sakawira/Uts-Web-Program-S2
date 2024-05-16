<?php 
require_once"app.php";

$id = $_GET["id"];
// $p = getAllData($conn);
$d = findfilmByID($conn, $id)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>
<style>
        :root{
    --text-color: #fff;
    --bg-color: #ff2400;
    --second-bg-color: #000;
    --main-color: #fff;
    --other-color: #c3cad5;

    --h1-font: 4.5rem;
    --h2-font: 2.9rem;
    --p-font: 1rem
}
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
        }   
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }
            .content {
                padding: 20px;
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

.search-container {
    position: relative;
}

#searchInput {
    padding: 5px 10px 5px 30px;
    border: none;
    border-radius: 3px;
    font-size: 1rem;
    background-color: #333;
    color: #fff;
}

#searchIcon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #000;
    cursor: pointer;
}
span{
    color: var(--main-color);
}
.a-btn{
    display: inline-block;
    padding: 11px 26px;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    transition: all .50s ease;
    text-decoration: none;
}
.a-btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: 0 0 20px var(--main-color);
    transform: scale(1.1);
}

</style>
<body>
<header>
        <div class="container">
        <div class="logo">Data Kucing</div>
            <nav>
                <ul>
                    <li><a href="kucing.php"class="a-btn">kembali</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Riwayat Kucing</h1>

    <br>
    <br>

    <p>Nama Kucing : <?= $d['nama_kucing']  ?></p>
    <p>Jenis Kucing : <?= $d['jenis_kucing']  ?></p>
    <p>Harga Kucing : <?= $d['harga_kucing']  ?></p>
    <p>Created At : <?= $d['created_at']  ?></p>
    <p>Update At : <?= $d['updated_at']  ?></p>
</body>
</html>

<?php
mysqli_close($conn)
?>