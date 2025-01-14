<?php
session_start();

if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];

    include_once('db.php');

    // ตรวจสอบว่ามีอีเมลซ้ำในฐานข้อมูลหรือไม่
    $checkSql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        // ถ้าอีเมลซ้ำ
        $_SESSION['alert'] = 'Email already exists';
        header('location: ../register.php?status=error');
        exit(0);
    } else {
        // ถ้าอีเมลไม่ซ้ำ ให้เพิ่มข้อมูลใหม่
        $sql = "INSERT INTO users(firstname, lastname, email, password, tel, birth, gender, address, nationality, id_role) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, '2')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $firstname, $lastname, $email, $password, $tel, $birth, $gender, $address, $nationality);

        if($stmt->execute()){
            $_SESSION['alert'] = 'Register Success';
            header('location: ../register.php?status=success');
            exit(0);
        } else {
            $_SESSION['alert'] = 'Register Error';
            header('location: ../register.php?status=error');
            exit(0);
        }
    }
}
?>
