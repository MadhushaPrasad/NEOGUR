function checkStudentLogin() {
    var email = $('#sEmail').val();
    var password = $('#sPassword').val();
    if (email == "" && password == "") {
        alert("You cant Login without any data enter..!");
    } else {
        var loginForm = $('.loginForm').serialize();
        var jsonConfig = {
            url: '../NeoGuru/api/services/LoginService.php?action=check-student',
            method: 'POST',
            data: loginForm,
            dataTypes: 'JSON',
            async: true
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res == "true") {
                document.location.href = "../NeoGuru/studentDashboard.html";
            } else {
                document.location.href = "../NeoGuru/studentDashboard.html";
            }
        }).fail(function (xhr) {
            alert(xhr);
        });
    }
}

function addStudent() {
    var loginForm = $('.signUpForm').serialize();
    alert(loginForm);
    var jsonConfig = {
        url: '../NeoGuru/api/services/LoginService.php?action=student-save',
        method: 'POST',
        data: loginForm,
        dataTypes: 'JSON',
        async: true
    };

    $.ajax(jsonConfig).done(function (res) {
        if (res == "1") {
            alert("Student Registered");
        } else {
            alert("Please enter your correct email or password");
        }
    }).fail(function (xhr) {
        console.log(xhr);
    });
}