<?php
session_start();

if (isset($_SESSION['u']) && $_SESSION['u'] != null && isset($_SESSION['p']) && $_SESSION['p'] != null) {
    include_once('../system/db.php');

    $old_password = $_GET['old_password'];
    $new_password = $_GET['new_password'];
    $confirm_password = $_GET['confirm_password'];
    $email = $_SESSION['u'];

    if ($old_password == $_SESSION['p']) {
        if ($new_password === $confirm_password) {
            $sql = "UPDATE users SET password = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $new_password, $email);

            if ($stmt->execute()) {
                $stmt->close();
                $conn->close();
                header("location: ../user/index.php?menu=2&status=success");
                exit(0);
            }
        } else {
            // รหัสผ่านใหม่และยืนยันรหัสผ่านไม่ตรงกัน
            header("location: ../user/index.php?menu=2&status=error_mismatch");
            exit(0);
        }
    } else {
        // รหัสผ่านปัจจุบันไม่ถูกต้อง
        header("location: ../user/index.php?menu=2&status=error");
        exit(0);
    }
} else {
    header("location: ../user/index.php?menu=2");
    exit(0);
}
?>
