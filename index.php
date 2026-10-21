
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>

    <h2>Form Nilai Ujian</h2>

    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required>
        <br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="nilai">Nilai Ujian:</label><br>
        <input type="number" id="nilai" name="nilai"
               min="0" max="100" required>
        <br><br>

        <button type="submit" name="submit">Periksa Nilai</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        // Mengambil data dari form
        $nama = htmlspecialchars(trim($_POST['nama']));
        $email = htmlspecialchars(trim($_POST['email']));
        $nilai = (int) $_POST['nilai'];

        // Memeriksa status kelulusan
        if ($nilai > 70) {
            $status = "Lulus";
        } elseif ($nilai < 70) {
            $status = "Remedial";
        } else {
            $status = "Nilai 70 belum ditentukan dalam instruksi tugas";
        }

        // Menampilkan hasil pemeriksaan
        echo "<h3>Hasil Pemeriksaan Nilai</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai Ujian: " . $nilai . "<br>";
        echo "Status: " . $status . "<br>";
    }
    ?>

</body>
</html>
