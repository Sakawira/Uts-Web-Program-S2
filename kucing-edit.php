<?php
require_once "app.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
    $nama_kucing = $_POST['nama_kucing'];
    $jenis_kucing = $_POST['jenis_kucing'];
    $harga_kucing = $_POST['harga_kucing'];

    $sql = "UPDATE kucing SET `nama_kucing`='$nama_kucing',`jenis_kucing`='$jenis_kucing',`harga_kucing`='$harga_kucing' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: kucing.php?msg=Data updated successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Update Data Kucing</title>
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
    background-color: #141414;
    color: #black;
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
.form-label {
    color: #fff;
}
.text-center {
    color: #fff;
}
span{
    color: var(--main-color);
}


    </style>

    <body>
    <header>
        <div class="container">
        <div class="logo">Kucing</div>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <i class="fas fa-search" id="searchIcon"></i>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit Data Kucing</h3>
                <p class="text-muted">Click update after changing any information</p>
            </div>

            <?php
            $sql = "SELECT * FROM `kucing` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $v = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Nama Kucing:</label>
                            <input type="text" class="form-control" name="nama_kucing" value="<?php echo $v['nama_kucing'] ?>">
                        </div>

                        <div class="col">
                            <label class="form-label">Jenis Kucing:</label>
                            <inp type="text" class="form-control" name="jenis_kucing" value="<?php echo $v['jenis_kucing'] ?>">
                            <select name="jenis_kucing">
                                <option value="Angora">Angora</option>
                                <option value="Persia">Persia</option>
                                <option value="Maine coon">Maine coon</option>
                                <option value="Siam">Siam</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Kucing:</label>
                        <input type="text" class="form-control" name="harga_kucing" value="<?php echo $v['harga_kucing'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="mylist.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

    </html>