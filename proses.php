<?php
session_start();

function validasiForm($data) {
    $errors = [];

    if (empty($data['nama'])) $errors[] = "Nama wajib diisi.";
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
    if (empty($data['gender'])) $errors[] = "Jenis kelamin wajib dipilih.";
    if (empty($data['jabatan'])) $errors[] = "Jabatan yang dilamar wajib dipilih.";

    return $errors;
}

$data = [
    'nama' => htmlspecialchars($_POST['nama']),
    'email' => htmlspecialchars($_POST['email']),
    'gender' => $_POST['gender'],
    'jabatan' => $_POST['jabatan']
];

$errors = validasiForm($data);

if (!isset($_SESSION['peserta'])) {
    $_SESSION['peserta'] = [];
}

if (empty($errors)) {
    $_SESSION['peserta'][] = $data;
    $_SESSION['sukses'] = "Pendaftaran berhasil!";
    header("Location: index.php");
} else {
    $_SESSION['error'] = implode("<br>", $errors);
    header("Location: index.php");
}
exit;
