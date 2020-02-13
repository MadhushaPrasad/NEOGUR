$(document).ready(function () {
    getAllSubjects();
});


function getAllSubjects() {
    $('#subjectList').empty();
    $.ajax({
        url: "../NeoGuru/api/services/PaperService.php?action=getAllSubject",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (res) {
        for (var i in res) {
            $('#subjectList').append("<option value=\"\" class=\"dropdown-item\">" + res[i][1] + "</option>");
        }
    }).fail(function (xhr) {
        console.log(xhr.responseText);
    });
}


function publish(paperType) {
    if (paperType == "mcq") {

    }
}