<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran ESSA - Regenerasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Pendaftaran ESSA - Regenerasi</h2>

        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<div class='error'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
        } elseif (isset($_SESSION['sukses'])) {
            echo "<div class='success'>{$_SESSION['sukses']}</div>";
            unset($_SESSION['sukses']);
        }
        ?>

        <form method="POST" action="proses.php">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Jenis Kelamin:</label>
            <select name="gender" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label>Jabatan yang Dilamar:</label>
            <select name="jabatan" required>
                <option value="">-- Pilih Jabatan --</option>
                <option value="Ketua">Ketua</option>
                <option value="Sekretaris">Sekretaris</option>
                <option value="Bendahara">Bendahara</option>
                <option value="Inventaris">Inventaris</option>
                <option value="Humas">Humas</option>
                <option value="PIC Talent">PIC Talent</option>
                <option value="PIC Design">PIC Design</option>
                <option value="PIC Operator">PIC Operator</option>
                <option value="PIC Content Creator">PIC Content Creator</option>
                <option value="PIC Editor">PIC Editor</option>
                <option value="PIC Web Development">PIC Web Development</option>
            </select>

            <button type="submit">Daftar</button>
        </form>

        <p><a href="peserta.php">Lihat Daftar Peserta</a></p>
    </div>
</body>
</html>
