<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเลือกตั้ง 2024 - ร่วมสร้างอนาคตประเทศไทย</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">การเลือกตั้ง 2024</div>
            <div class="mobile-menu-toggle" id="mobile-menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="header-buttons" id="header-buttons">
                <a href="#" class="header-btn header-btn-login" id="login-btn">เข้าสู่ระบบ</a>
                <a href="#" class="header-btn header-btn-register" id="register-header-btn">ลงทะเบียน</a>
            </div>
        </div>
    </header>

    <div class="container">
        <section class="hero">
            <div class="hero-content">
                <h2>รู้สิทธิ์ รู้หน้าที่ พลเมืองที่ดี</h2>
                <p>การมีส่วนร่วมทางการเมืองเป็นหัวใจสำคัญของระบอบประชาธิปไตย</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary" id="register-btn">ลงทะเบียนเลือกตั้ง</a>
                    <a href="#" class="btn btn-secondary" id="info-btn">ดูข้อมูลเพิ่มเติม</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvPjv1lHEIpzgDk_e3Sm-e4EVOzggYdb5aHA&s" alt="การเลือกตั้ง" />
            </div>
        </section>

        <section class="features">
            <div class="feature">
                <h3>สิทธิการเลือกตั้ง</h3>
                <p>ทำความเข้าใจสิทธิและเงื่อนไขการใช้สิทธิเลือกตั้ง</p>
            </div>
            <div class="feature">
                <h3>ขั้นตอนการเลือกตั้ง</h3>
                <p>คู่มือครบวงจรสำหรับวันเลือกตั้ง</p>
            </div>
            <div class="feature">
                <h3>ติดตามผลการเลือกตั้ง</h3>
                <p>ระบบติดตามผลแบบเรียลไทม์</p>
            </div>
        </section>
    </div>

    <!-- Login and Register Modals (Same as previous version) -->
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal" id="close-login-modal">&times;</span>
            <h2>เข้าสู่ระบบ</h2>
            <form id="login-form" class="modal-form">
                <div class="form-group">
                    <label for="login-username">ชื่อผู้ใช้</label>
                    <input type="text" id="login-username" placeholder="กรุณากรอกชื่อผู้ใช้" required>
                </div>
                <div class="form-group">
                    <label for="login-password">รหัสผ่าน</label>
                    <input type="password" id="login-password" placeholder="กรุณากรอกรหัสผ่าน" required>
                </div>
                <button type="submit">เข้าสู่ระบบ</button>
                <div class="form-footer">
                    <p>ยังไม่มีบัญชี? <a href="#" id="switch-to-register">ลงทะเบียนที่นี่</a></p>
                </div>
            </form>
        </div>
    </div>

    <div id="register-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal" id="close-register-modal">&times;</span>
            <h2>ลงทะเบียน</h2>
            <form id="registration-form" class="modal-form">
                <div class="form-group">
                    <label for="reg-firstname">ชื่อ</label>
                    <input type="text" id="reg-firstname" placeholder="กรุณากรอกชื่อ" required>
                </div>
                <div class="form-group">
                    <label for="reg-lastname">นามสกุล</label>
                    <input type="text" id="reg-lastname" placeholder="กรุณากรอกนามสกุล" required>
                </div>
                <div class="form-group">
                    <label for="reg-id">เลขบัตรประชาชน</label>
                    <input type="text" id="reg-id" placeholder="กรุณากรอกเลขบัตรประชาชน 13 หลัก" pattern="[0-9]{13}" required>
                </div>
                <div class="form-group">
                    <label for="reg-email">อีเมล</label>
                    <input type="email" id="reg-email" placeholder="กรุณากรอกอีเมล" required>
                </div>
                <div class="form-group">
                    <label for="reg-password">รหัสผ่าน</label>
                    <input type="password" id="reg-password" placeholder="กรุณากรอกรหัสผ่าน" required>
                </div>
                <button type="submit">ลงทะเบียน</button>
                <div class="form-footer">
                    <p>มีบัญชีอยู่แล้ว? <a href="#" id="switch-to-login">เข้าสู่ระบบที่นี่</a></p>
                </div>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h4>เกี่ยวกับเรา</h4>
                    <ul>
                        <li><a href="#">วิสัยทัศน์</a></li>
                        <li><a href="#">พันธกิจ</a></li>
                        <li><a href="#">ทีมงาน</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>บริการ</h4>
                    <ul>
                        <li><a href="#">ตรวจสอบสิทธิ์</a></li>
                        <li><a href="#">ค้นหาหน่วยเลือกตั้ง</a></li>
                        <li><a href="#">แจ้งปัญหา</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>ติดต่อ</h4>
                    <ul>
                        <li>โทร: 1234-5678</li>
                        <li>อีเมล: contact@election.gov.th</li>
                        <li>ที่อยู่: กรุงเทพมหานคร</li>
                    </ul>
                </div>
                <div class="footer-column social-media">
                    <h4>ติดตามเรา</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon">Facebook</a>
                        <a href="#" class="social-icon">Twitter</a>
                        <a href="#" class="social-icon">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 การเลือกตั้งไทย. สงวนลิขสิทธิ์</p>
                <div class="footer-links">
                    <a href="#">นโยบายความเป็นส่วนตัว</a>
                    <a href="#">เงื่อนไขการใช้งาน</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>

</body>
</html>