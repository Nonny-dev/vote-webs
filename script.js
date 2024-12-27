document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const headerButtons = document.getElementById('header-buttons');

    // Mobile Menu Toggle
    mobileMenuToggle.addEventListener('click', () => {
        headerButtons.classList.toggle('active');
    });

    // Rest of the previous JavaScript remains the same
    const loginBtn = document.getElementById('login-btn');
    const registerHeaderBtn = document.getElementById('register-header-btn');
    const registerBtn = document.getElementById('register-btn');
    const infoBtn = document.getElementById('info-btn');
    
    const loginModal = document.getElementById('login-modal');
    const registerModal = document.getElementById('register-modal');
    
    const closeLoginModalBtn = document.getElementById('close-login-modal');
    const closeRegisterModalBtn = document.getElementById('close-register-modal');
    
    const loginForm = document.getElementById('login-form');
    const registrationForm = document.getElementById('registration-form');

    const switchToRegister = document.getElementById('switch-to-register');
    const switchToLogin = document.getElementById('switch-to-login');

    // Login Modal
    loginBtn.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.style.display = 'block';
        headerButtons.classList.remove('active');
    });

    closeLoginModalBtn.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('เข้าสู่ระบบสำเร็จ');
        loginModal.style.display = 'none';
    });

    // Register Modals
    [registerHeaderBtn, registerBtn].forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.style.display = 'block';
            headerButtons.classList.remove('active');
        });
    });

    closeRegisterModalBtn.addEventListener('click', () => {
        registerModal.style.display = 'none';
    });

    registrationForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('ขอบคุณที่ลงทะเบียน เราจะแจ้งข้อมูลเพิ่มเติมให้คุณทราบ');
        registerModal.style.display = 'none';
    });

    // Close modals when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === loginModal) {
            loginModal.style.display = 'none';
        }
        if (e.target === registerModal) {
            registerModal.style.display = 'none';
        }
    });

    // Info Button
    infoBtn.addEventListener('click', (e) => {
        e.preventDefault();
        alert('กำลังเตรียมข้อมูล กรุณาติดตามอย่างใกล้ชิด');
    });

    switchToRegister.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });
    
    switchToLogin.addEventListener('click', (e) => {
        e.preventDefault();
        registerModal.style.display = 'none';
        loginModal.style.display = 'block';
    });
});