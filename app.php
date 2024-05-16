<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kucing";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Gagal konek ke database : ". mysqli_connect_error());
}

function getAllData($conn) 
{
    $sql = "SELECT * FROM kucing";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    //mysqi_close($conn);

    return $data;
}
function findfilmByID($conn, $id)
{
    $sql = "SELECT * FROM kucing WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while ($row =mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}
function kucingBaru($conn, $data)
{
     $sql = "INSERT INTO kucing
     (jenis_kucing, nama_kucing, harga_kucing, created_at, updated_at) 
     VALUES(
        '{$data['jenis_kucing']}',
        '{$data['nama_kucing']}',
        '{$data['harga_kucing']}',
        NOW(),
        NOW()
        );";


    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

  return null;
}
        




// echo"<pre>";
// echo var_dump($p);
// echo "</pre>";
// mysqli_close($conn);