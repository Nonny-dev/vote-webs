<?php
session_start();

if (isset($_POST['login'])) {
    $u = $_POST['email'];
    $p = $_POST['password'];

    include_once('db.php');
    $sql = "SELECT u.id_user, u.firstname, u.lastname, u.email, u.password, u.tel, u.birth, u.gender, u.address, u.nationality, r.id_role, r.name_role
            FROM users u, role r
            WHERE u.id_role = r.id_role
            AND u.email = ?
            AND u.password = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['id_role'] = $row['id_role'];
        $_SESSION['alert'] = "เข้าสู่ระบบสำเร็จ";
    
        if ($row['id_role'] == '1') { // Admin
            header("location: ../login.php?status=success_admin");
        } elseif ($row['id_role'] == '2') { // User
            header("location: ../login.php?status=success_user");
        }
    } else {
        $_SESSION['alert'] = "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
        header("location: ../login.php?status=error");
    }
    exit();
}
?>
