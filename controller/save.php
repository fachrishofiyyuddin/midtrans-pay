<?php
// ambil koneksi
include "../koneksi/index.php";

header('Content-Type: application/json');

$response = array();

// Pastikan $_POST['product'] ada dan tidak kosong
if (isset($_POST['product']) && isset($_POST['price']) && isset($_POST['color']) && isset($_POST['capacity']) && isset($_POST['name']) && isset($_POST['email'])) {
    // Simpan data $_POST['product'] ke dalam variabel
    $product = $_POST['product'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $capacity = $_POST['capacity'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $datePay = date("Y-m-d");

    // Masukkan nilai-nilai yang sesuai ke dalam query SQL
    $query_insert = "INSERT INTO `pay`(`name`, `color`, `capacity`, `product`, `price`, `email`, `date_pay`) 
                     VALUES ('$name', '$color', '$capacity', '$product', '$price', '$email', '$datePay')";

    // Eksekusi query
    $result = mysqli_query($conn, $query_insert);

    // Periksa keberhasilan eksekusi query
    if ($result) {
        // Respons sukses
        $response = array(
            "status" => true,
            "message" => "Data product berhasil diterima dan diproses.",
            "data" => $product
        );
    } else {
        // Respons gagal
        $response = array(
            "status" => false,
            "message" => "Gagal memasukkan data ke database."
        );
    }
} else {
    // Jika $_POST['product'] tidak ada atau kosong, kirim respons error
    $response = array(
        "status" => false,
        "message" => "Data not found in POST"
    );
}

// Mengubah array menjadi format JSON dan mencetaknya
echo json_encode($response);
