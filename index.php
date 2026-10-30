
<?php
require_once "koneksi.php";

function jumlahData($conn, $tabel) {
    $query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM $tabel");
    return mysqli_fetch_assoc($query)['total'];
}

$totalPeserta = jumlahData($conn, "peserta_bpjs");
$totalKelas = jumlahData($conn, "kelas_bpjs");
$totalPerubahan = jumlahData($conn, "perubahan_kepesertaan");
$totalKlaim = jumlahData($conn, "klaim_komplain");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | BPJS PT ABC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">

    <div class="brand">
        <div class="brand-icon">+</div>
        <div>
            <h2>BPJS PT ABC</h2>
            <p>Management System</p>
        </div>
    </div>

    <div class="menu-title">MENU UTAMA</div>

    <a href="index.php" class="menu active">
        <span>▦</span> Dashboard
    </a>

    <a href="#" class="menu">
        <span>♙</span> Data Peserta
    </a>

    <a href="#" class="menu">
        <span>▤</span> Kelas BPJS
    </a>

    <a href="#" class="menu">
        <span>▣</span> Premi Bulanan
    </a>

    <a href="#" class="menu">
        <span>↻</span> Perubahan Data
    </a>

    <a href="#" class="menu">
        <span>☷</span> Klaim & Komplain
    </a>

    <a href="#" class="menu">
        <span>▧</span> Laporan
    </a>

    <div class="sidebar-bottom">
        <div class="admin-box">
            <div class="avatar">A</div>
            <div>
                <strong>Administrator</strong>
                <small>Admin Sistem</small>
            </div>
        </div>
    </div>

</div>


<main class="main">

    <header class="topbar">
        <div>
            <h3>Dashboard Overview</h3>
            <p>Sistem Informasi BPJS PT ABC</p>
        </div>

        <div class="top-right">
            <div class="date">
                <span>●</span> Sistem Aktif
            </div>
            <div class="profile">A</div>
        </div>
    </header>


    <section class="welcome">
        <div class="welcome-text">
            <span class="welcome-label">INFORMATION SYSTEM</span>

            <h1>Selamat Datang di<br>
                Sistem Informasi BPJS PT ABC
            </h1>

            <p>
                Platform pengelolaan data kepesertaan BPJS,
                perhitungan premi, perubahan data, serta
                administrasi karyawan dan anggota keluarga.
            </p>

            <div class="welcome-info">
                <span>●</span> Sistem Pengelolaan BPJS Perusahaan
            </div>
        </div>

        <div class="welcome-decoration">
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
            <div class="medical-icon">✚</div>
            <div class="decoration-text">PT ABC</div>
        </div>
    </section>


    <section class="section-heading">
        <div>
            <h2>Ringkasan Data</h2>
            <p>Informasi terkini pengelolaan kepesertaan BPJS.</p>
        </div>
    </section>


    <section class="statistics">

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon blue">♙</div>
                <span class="stat-tag">PESERTA</span>
            </div>
            <p>Total Peserta BPJS</p>
            <h2><?= $totalPeserta ?></h2>
            <small>Data pegawai dan keluarga</small>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon purple">▤</div>
                <span class="stat-tag">KELAS</span>
            </div>
            <p>Kelas BPJS</p>
            <h2><?= $totalKelas ?></h2>
            <small>Kategori kelas kepesertaan</small>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon orange">↻</div>
                <span class="stat-tag">PERUBAHAN</span>
            </div>
            <p>Perubahan Kepesertaan</p>
            <h2><?= $totalPerubahan ?></h2>
            <small>Riwayat perubahan peserta</small>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon green">☷</div>
                <span class="stat-tag">PENGAJUAN</span>
            </div>
            <p>Klaim & Komplain</p>
            <h2><?= $totalKlaim ?></h2>
            <small>Jumlah pengajuan tercatat</small>
        </div>

    </section>


    <section class="section-heading">
        <div>
            <h2>Menu Pengelolaan</h2>
            <p>Pilih layanan untuk mengelola administrasi BPJS.</p>
        </div>
    </section>


    <section class="services">

        <div class="service-card">
            <div class="service-icon blue">♙</div>
            <h3>Data Peserta</h3>
            <p>Pengelolaan data pegawai dan anggota keluarga peserta BPJS.</p>
            <span>Pengelolaan data →</span>
        </div>

        <div class="service-card">
            <div class="service-icon purple">▤</div>
            <h3>Kelas BPJS</h3>
            <p>Pengaturan kelas kepesertaan dan tarif premi BPJS.</p>
            <span>Pengaturan kelas →</span>
        </div>

        <div class="service-card">
            <div class="service-icon green">▣</div>
            <h3>Premi Bulanan</h3>
            <p>Perhitungan premi dan pembagian subsidi perusahaan 60%.</p>
            <span>Perhitungan premi →</span>
        </div>

        <div class="service-card">
            <div class="service-icon orange">↻</div>
            <h3>Perubahan Data</h3>
            <p>Pencatatan kelahiran, perceraian, dan meninggal dunia.</p>
            <span>Perubahan peserta →</span>
        </div>

        <div class="service-card">
            <div class="service-icon red">☷</div>
            <h3>Klaim & Komplain</h3>
            <p>Pengelolaan pengajuan klaim dan keluhan peserta.</p>
            <span>Kelola pengajuan →</span>
        </div>

        <div class="service-card">
            <div class="service-icon blue">▧</div>
            <h3>Laporan</h3>
            <p>Rekapitulasi premi, data peserta, dan laporan administrasi.</p>
            <span>Lihat laporan →</span>
        </div>

    </section>


    <footer>
        © <?= date('Y') ?> Sistem Informasi BPJS PT ABC.
        All Rights Reserved.
    </footer>

</main>

</body>
</html>
