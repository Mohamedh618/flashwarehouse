<?php
// بيانات الاتصال من Railway → Connect
$host = 'nozomi.proxy.rlwy.net';
$user = 'root';
$pass = 'BidkvecOfSssXmdZfLtdjwBwxbyCuiYP';
$db   = 'railway';
$port = 46884;
// الاتصال بقاعدة البيانات
$conn = new mysqli($host, $user, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// تخزين كلمة المرور كما هي (بدون تشفير)
$stmt = $conn->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user, $email, $pass);

if ($stmt->execute()) {
    // رسالة تنبيه
    echo "<script>
            alert('✅ Signup successful!');
          </script>";
} else {
    echo "<script>
            alert('❌ Error: " . $stmt->error . "');
          </script>";
}

$stmt->close();
$conn->close();
?>

