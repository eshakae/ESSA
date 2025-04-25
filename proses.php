<?php
session_start();

// Cek apakah data sudah ada di form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $jabatan = $_POST['jabatan'];

    // Validasi data
    if ($nama && $email && $gender && $jabatan) {
        // Menyimpan data peserta dalam sesi
        if (!isset($_SESSION['peserta'])) {
            $_SESSION['peserta'] = [];
        }

        $_SESSION['peserta'][] = [
            'nama' => $nama,
            'email' => $email,
            'gender' => $gender,
            'jabatan' => $jabatan
        ];

        // Redirect ke halaman daftar peserta
        header('Location: peserta.php');
        exit;
    } else {
        // Jika ada data yang kosong, tampilkan error
        $_SESSION['error'] = 'Mohon lengkapi semua kolom!';
        header('Location: index.php');
        exit;
    }
}
?>
