<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
        <section class="container">
            <center><img src="img/users.png" alt=""></center>
            <header>เข้าสู่ระบบ</header>
            <form action="system/login.php" method="post" class="form">
                <div class="column">
                    <div class="input-box">
                        <label>อีเมล</label>
                        <input type="text" placeholder="อีเมล" name="email" required />
                    </div>
                    <div class="input-box">
                        <label>รหัสผ่าน</label>
                        <input type="password" placeholder="รหัสผ่าน" name="password" required />
                    </div>
                </div>

                <button type="submit" name="login">Login</button>
                <div class="center-container">
                    <a href="register.php" class="login-link">Do you not have member?</a>
                </div>
            </form>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        
        <?php session_start();
        if (isset($_SESSION['alert'])): ?>
            Swal.fire({
                title: 'Notification',
                text: '<?= $_SESSION['alert']; ?>',
                icon: '<?= ($_GET['status'] == "success_admin" || $_GET['status'] == "success_user") ? "success" : "error"; ?>',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                <?php if ($_GET['status'] == "success_admin"): ?>
                    window.location.href = "admin/index.php";
                <?php elseif ($_GET['status'] == "success_user"): ?>
                    window.location.href = "user/index.php?menu=1";
                <?php else: ?>
                    window.location.href = "login.php";
                <?php endif; ?>
            });
            <?php unset($_SESSION['alert']); endif; ?>
    </script>


</body>

</html>