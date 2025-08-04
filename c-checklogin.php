
<?php
session_start();
if (!isset($_SESSION['cid'])) {
    echo '<p style="color:red;">' . htmlspecialchars('Access Denied!', ENT_QUOTES, 'UTF-8') . '</p>';
    
    // สร้าง path โดยอิงจากโฟลเดอร์ปัจจุบัน
    $baseUrl = dirname($_SERVER['PHP_SELF']);
    $redirectUrl = $baseUrl . '/index.php';

    header("Refresh: 3; URL=$redirectUrl");
    exit;
}

?>

