<!-- <?php
$host = "mysql.railway.internal";// من Railway
$port = 3306; // البورت من Railway
$dbname = "railway"; 
$user = "root"; 
$password = "lMLyVHBHrPGvMOxMofJjwZVCOavcNpwV"; // الباسورد من Railway

// الاتصال
$conn = new mysqli($host, $user, $password, $dbname, $port);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "✅ Connected successfully";
?> -->


<?php
$host = "yamabiko.proxy.rlwy.net";
$port = 35052;
$user = "root";
$password = "lMLyVHBHrPGvMOxMofJjwZVCOavcNpwV";
$database = "railway";

// الاتصال
$conn = new mysqli($host, $user, $password, $database, $port);

// تحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected successfully";

// مثال: استعلام
$result = $conn->query("SELECT NOW() as current_time");
$row = $result->fetch_assoc();
echo "<br>Server time: " . $row['current_time'];

$conn->close();
?>