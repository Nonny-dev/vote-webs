<?php
include_once("db.php");

$sql = "UPDATE users SET firstname = ? , lastname = ? , tel = ? , address = ? WHERE id_user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $firstname, $lastname, $tel, $address, $id_user);

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$tel = $_GET['tel'];
$address = $_GET['address'];
$id_user = $_GET['id_user'];

if ($stmt->execute()) {
    $status = 'success'; // ตั้งค่าสถานะสำเร็จ
} else {
    $status = 'error'; // ตั้งค่าสถานะล้มเหลว
}

$stmt->close();
$conn->close();

// ส่งสถานะกลับไปยังหน้าฟอร์ม
header("location: ../user/index.php?menu=3&status=$status");
exit(0);
?>
