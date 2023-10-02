<?php
// Koneksi ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakweb2023b_213040046";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel "buku"
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

// Cek apakah query berhasil
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Judul: " . $row["judul"] . "<br>";
        echo "Pengarang: " . $row["pengarang"] . "<br>";
        echo "Penerbit: " . $row["penerbit"] . "<br>";
        echo "Tahun Terbit: " . $row["tahun_terbit"] . "<br>";
        echo "Harga: $" . $row["harga"] . "<br>";
        echo "Gambar: <img src='" . $row["gambar"] . "' alt=Gambar Buku '> <br><br>";
    }
} else {
    echo "Tidak ada data buku.";
}
?>
