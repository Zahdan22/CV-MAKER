<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?php echo htmlspecialchars($_SESSION['nama'] ?? 'Nama Anda'); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo htmlspecialchars($_SESSION['nama'] ?? 'Nama Anda'); ?></h1>
            <p><?php echo htmlspecialchars($_SESSION['email'] ?? 'Email Anda'); ?></p>
            <a href="logout.php" style="position: absolute; top: 20px; right: 20px; background: red; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">Logout</a>
        </header>
        <section class="about">
            <h2>Data Pribadi</h2>
            <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo htmlspecialchars($_SESSION['ttl'] ?? 'Belum diisi'); ?></p>
        </section>
        <section class="education">
            <h2>Riwayat Pendidikan</h2>
            <ul>
                <li><strong><?php echo htmlspecialchars($_SESSION['pendidikan'] ?? 'Pendidikan belum diisi'); ?></strong></li>
            </ul>
        </section>
        <section class="experience">
            <h2>Pengalaman Kerja</h2>
            <p><?php echo nl2br(htmlspecialchars($_SESSION['pengalaman'] ?? 'Belum diisi')); ?></p>
        </section>
        <section class="skills">
            <h2>Keterampilan</h2>
            <ul>
                <li><?php echo htmlspecialchars($_SESSION['skill1'] ?? 'Skill 1'); ?></li>
                <li><?php echo htmlspecialchars($_SESSION['skill2'] ?? 'Skill 2'); ?></li>
                <li><?php echo htmlspecialchars($_SESSION['skill3'] ?? 'Skill 3'); ?></li>
            </ul>
        </section>
    </div>
</body>
</html>
