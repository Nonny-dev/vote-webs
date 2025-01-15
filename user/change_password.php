<div class="password-form">
    <h2>เปลี่ยนรหัสผ่าน</h2>
    <form action="../system/change_password.php" method="get">

        <div class="form-group">
            <label>รหัสผ่านปัจจุบัน:</label>
            <input type="password" id="currentPassword" name="old_password" required>
        </div>

        <div class="form-group">
            <label for="newPassword">รหัสผ่านใหม่:</label>
            <input type="password" id="newPassword" name="new_password" required>
            <div id="passwordError" class="error-text">
                รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร และประกอบด้วยตัวอักษรภาษาอังกฤษและตัวเลข
            </div>
        </div>

        <div class="form-group">
            <label for="confirmPassword">ยืนยันรหัสผ่านใหม่:</label>
            <input type="password" id="confirmPassword" name="confirm_password" required>
            <div id="confirmError" class="error-text">
                รหัสผ่านไม่ตรงกัน
            </div>
        </div>

        <button type="submit" name="change_password">เปลี่ยนรหัสผ่าน</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const status = '<?= $_GET['status'] ?? ""; ?>';

    if (status === 'success') {
        Swal.fire({
            title: 'Success',
            text: 'เปลี่ยนรหัสผ่านสำเร็จ กรุณาเข้าสู่ระบบใหม่',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = "logout.php";
        });
    } else if (status === 'error') {
        Swal.fire({
            title: 'Error',
            text: 'รหัสผ่านปัจจุบันไม่ถูกต้อง',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    } else if (status === 'error_mismatch') {
        Swal.fire({
            title: 'Error',
            text: ' รหัสผ่านใหม่และยืนยันรหัสผ่านไม่ตรงกัน',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
</script>