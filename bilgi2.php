<?php
$kullanici1 = $_POST['kullanici1'];
$ad1 = $_POST['ad1'];
$soyad1 = $_POST['soyad1'];
$mail1 = $_POST['mail1'];
$password1 = $_POST['password1'];

if (strlen($password1) < 8) {
    echo "Password en az 8 karakterden oluşmalıdır!!";
    exit;
}

$salt = "benimsabitsaltim123456789";
$password_hash1 = hash("sha512", $password1 . $salt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sonuç</title>
</head>
<body>
    <h3>Hoş geldin, <?php echo htmlspecialchars($kullanici1); ?>!</h3>
    <p><strong>Adı:</strong> <?php echo htmlspecialchars($ad1); ?></p>
    <p><strong>Soyadı:</strong> <?php echo htmlspecialchars($soyad1); ?></p>
    <p><strong>Mail:</strong> <?php echo htmlspecialchars($mail1); ?></p>
    <p><strong>Şifre (Hash):</strong> <?php echo $password_hash1; ?></p>
</body>
</html>
