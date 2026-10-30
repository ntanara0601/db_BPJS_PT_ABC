
<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_bpjs_pt_abc"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
