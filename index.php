<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kucing</title>
</head>
<body>
    <style>
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
    color: #fff;
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

.kucing{
    width: 100%;
  height: auto;
}

    </style>
<header>
        <div class="container">
            <div class="logo">Data Kucing</div>
            <nav>
                <ul>
                    <li><a href="kucing.php" class="a-btn">Jenis Kucing</a></li>
                    <li><a href="harga-kucing.php" class="a-btn">Harga Kucing</a></li>

                </ul>
            </nav>
        </div>
    </header>
<Center>
    <img src="mew.jpg" alt="kucing" class="kucing"  >

   
</body>
</html>