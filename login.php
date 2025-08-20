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

$email = $_POST['email'] ?? '';
$pswd = $_POST['pswd'] ?? ''; // لازم الفورم يبقى فيه input اسمه pswd

// استعلام للتحقق
$stmt = $conn->prepare("SELECT username, password FROM login WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($pswd === $row['password']) {
        // نجاح الدخول → رسالة و تحويل
        echo "<script>
                alert('✅ Login successful!');
                window.location.href = 'item.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('❌ Wrong password.');
              </script>";
    }
} else {
    echo "<script>
            alert('❌ No user found with this email.');
          </script>";
}

$stmt->close();
$conn->close();
?>

