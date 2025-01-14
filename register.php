<?php
$status = isset($_GET['status']) ? $_GET['status'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="page.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>


  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>
  <div class="content">
    <section class="container" data-aos="zoom-in">
      <center><img src="img/users.png" alt=""></center>
      <header>สมัครสมาชิก</header>
      <form action="system/register.php" method="post" class="form">

        <div class="input-box">
          <label>ชื่อจริง</label>
          <input type="text" placeholder="ชื่อจริง" name="firstname" required />
        </div>

        <div class="input-box">
          <label>นามสกุล</label>
          <input type="text" placeholder="นามสกุล" name="lastname" required />
        </div>

        <div class="input-box">
          <label>อีเมล</label>
          <input type="text" placeholder="อีเมล" name="email" required />
        </div>

        <div class="input-box">
          <label>รหัสผ่าน</label>
          <input type="password" placeholder="รหัสผ่าน" name="password" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>เบอร์โทรศัพท์</label>
            <input type="number" placeholder="เบอร์โทรศัพท์" name="tel" required />
          </div>

          <div class="input-box">
            <label>วัน/เดือน/ปี</label>
            <input type="date" placeholder="Enter birth date" name="birth" required />
          </div>
        </div>

        <div class="select-box">
          <select name="gender">
            <option hidden>เพศ</option>
            <option>ชาย</option>
            <option>หญิง</option>
            <option>ไม่ระบุ</option>
          </select>
        </div>

        <div class="input-box address">
          <label>ที่อยู่ปัจจุบัน</label>
          <input type="text" placeholder="ที่อยู่ปัจจุบัน" name="address" required />
          <div class="column">
            <div class="select-box">
              <select name="nationality">
                <option hidden>สัญชาติ</option>
                <option>ไทย</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" name="register">Register</button>

        <div class="center-container">
          <a href="login.php" class="login-link">Do you have member?</a>
        </div>

      </form>
    </section>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    AOS.init();

    const status = '<?= $status ?>';
    if (status === 'success') {
      Swal.fire({
        title: 'Success',
        text: 'สมัครสมาชิกสำเร็จ >_<',
        icon: 'success',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'login.php'; 
        }
      });
    } else if (status === 'error') {
      Swal.fire({
        title: 'Error',
        text: 'Email นี้ถูกใช้แล้ว >_<',
        icon: 'error',
        confirmButtonText: 'Try Again'
      });
    }
</script>


  </div>

</body>

</html>