<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['ttl'] = $_POST['ttl'];
    $_SESSION['pendidikan'] = $_POST['pendidikan'];
    $_SESSION['pengalaman'] = $_POST['pengalaman'];
    $_SESSION['skill1'] = $_POST['skill1'];
    $_SESSION['skill2'] = $_POST['skill2'];
    $_SESSION['skill3'] = $_POST['skill3'];

    header("Location: cv.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Input CV</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>
            
            <label for="ttl">Tempat, Tanggal Lahir:</label>
            <input type="text" name="ttl" required>

            <label for="pendidikan">Riwayat Pendidikan:</label>
            <input type="text" name="pendidikan" required>

            <label for="pengalaman">Pengalaman Kerja:</label>
            <textarea name="pengalaman" rows="3" required></textarea>

            <label for="skill1">Skill 1:</label>
            <input type="text" name="skill1" required>

            <label for="skill2">Skill 2:</label>
            <input type="text" name="skill2" required>

            <label for="skill3">Skill 3:</label>
            <input type="text" name="skill3" required>

            <input type="submit" value="Simpan dan Lihat CV">
        </form>
    </div>
</body>
</html>
