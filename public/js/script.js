function validateLogin() {
    const validUsername = "admin";
    const validPassword = "123456";

    const username = document.getElementById("admin").value;
    const password = document.getElementById("password");

    if (username === validUsername && password.value === validPassword) {
        alert("Login berhasil!");
        window.location.href = "/home";  // Redirect ke halaman home
    } else {
        alert("Username atau password salah.");
        password.value = "";  // Mengosongkan password jika salah
        password.focus();  // Membuat input password aktif kembali
    }
}
