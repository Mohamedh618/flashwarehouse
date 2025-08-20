// التعامل مع الـ Sign up
document.getElementById("signupForm").addEventListener("submit", async (e) => {
    e.preventDefault();
    let formData = new FormData(e.target);

    let response = await fetch("signup.php", {
        method: "POST",
        body: formData
    });

    let result = await response.text();
    alert(result); // يظهر رسالة نجاح أو خطأ

    // 👈 مفيش تحويل بعد الـ Signup
});

// التعامل مع الـ Login
document.getElementById("loginForm").addEventListener("submit", async (e) => {
    e.preventDefault();
    let formData = new FormData(e.target);

    let response = await fetch("login.php", {
        method: "POST",
        body: formData
    });

    let result = await response.text();
    alert(result); // يظهر رسالة نجاح أو خطأ

    if (result.includes("✅")) {
        // 👈 تحويل للصفحة بعد تسجيل الدخول
        
    }
});
