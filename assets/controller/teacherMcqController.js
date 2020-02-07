function addMcq() {
    var formData = $('.formM').serialize();
    $.ajax({
        url: "api/services/mcq.php?action=save",
        method: "POST",
        async: true,
        data: formData
    }).done(function (res) {
        if (res === "1") {
            alert("question Aded");
        } else {
            alert(res);
        }
        getAllQuestion();
    }).fail(function (xhr) {
        console.log(xhr);
    });
};


function getAllQuestion() {

}