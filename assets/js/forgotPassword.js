function navigateLoginPage(type) {
    if (type === "Teacher") {
        console.log("Teacher");
        window.location.href = "/NeoGuru/teachersLogin.html";
    } else if (type === "Student") {
        console.log("Student");
        window.location.href = '/NeoGuru/studentsLogin.html';
    }
}