<?php
session_start();

// Đăng xuất và làm mới ID phiên
session_unset();
session_destroy();
session_regenerate_id(true);

header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");


// Chuyển hướng đến trang chính
header("Location: index.php");
exit();
?>
