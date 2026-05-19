<?php
// ── Konfigurasi database
$host   = 'localhost';
$dbname = 'puncakjawa';   // ganti sesuai nama database kamu
$user   = 'root';          // ganti sesuai user MySQL kamu
$pass   = '';              // ganti sesuai password MySQL kamu

// ── Hanya terima metode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// ── Ambil & bersihkan input
$nama   = trim($_POST['nama']   ?? '');
$email  = trim($_POST['email']  ?? '');
$gunung = trim($_POST['gunung'] ?? '');
$pesan  = trim($_POST['pesan']  ?? '');

// ── Validasi sederhana
if ($nama === '' || $email === '') {
    header('Location: index.php?error=1');
    exit;
}

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $stmt = $pdo->prepare("
        INSERT INTO pesan (nama, email, gunung, pesan, created_at)
        VALUES (:nama, :email, :gunung, :pesan, NOW())
    ");

    $stmt->execute([
        ':nama'   => $nama,
        ':email'  => $email,
        ':gunung' => $gunung,
        ':pesan'  => $pesan,
    ]);

    // ── Redirect ke halaman utama dengan flag sukses
    header('Location: index.php?success=1');
    exit;

} catch (PDOException $e) {
    // Untuk debugging — matikan di production
    error_log('DB Error: ' . $e->getMessage());
    header('Location: index.php?error=1');
    exit;
}