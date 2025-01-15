<?php

$id_user = $_SESSION['id_user'];
include_once('../system/db.php');
$sql = "SELECT * FROM users WHERE id_user LIKE '$id_user'";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    ?>
    <div class="password-form">
        <h2>เปลี่ยนรหัสผ่านและรูปโปรไฟล์</h2>

        <form action="../system/change_profile.php" method="get">
            <?php $id_user = $row['id_user']; ?>
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

            <div class="form-group">
                <label>ชื่อจริง:</label>
                <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>
            </div>

            <div class="form-group">
                <label>นามสกุล:</label>
                <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required>
            </div>

            <div class="form-group">
                <label>เบอร์โทร:</label>
                <input type="text" name="tel" value="<?php echo $row['tel']; ?>" required>
            </div>

            <div class="form-group">
                <label>ที่อยู่:</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
            </div>

            <button type="submit" name="change_profile">บันทึกการเปลี่ยนแปลง</button>
        </form>
    </div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // ตรวจสอบและแสดง Alert เมื่อโหลดหน้า
    const status = '<?= $_GET['status'] ?? ""; ?>';
    if (status === 'success') {
        Swal.fire({
            title: 'Success',
            text: 'การเปลี่ยนแปลงข้อมูลสำเร็จ',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    } else if (status === 'error') {
        Swal.fire({
            title: 'Error',
            text: 'เกิดข้อผิดพลาด กรุณาลองใหม่',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
</script>