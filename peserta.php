<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta ESSA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Peserta ESSA - Regenerasi</h2>

        <?php if (!empty($_SESSION['peserta'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Jabatan yang Dipilih</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['peserta'] as $i => $p): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($p['nama']) ?></td>
                            <td><?= htmlspecialchars($p['email']) ?></td>
                            <td><?= htmlspecialchars($p['gender']) ?></td>
                            <td><?= htmlspecialchars($p['jabatan']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p><a href="reset.php" onclick="return confirm('Yakin hapus semua data?')">Reset Data</a></p>
        <?php else: ?>
            <p>Belum ada peserta.</p>
        <?php endif; ?>

        <p><a href="index.php">Kembali ke Form</a></p>
    </div>
</body>
</html>
