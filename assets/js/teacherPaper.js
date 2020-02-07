var count = 0;
var QCount = 0;

function createNewQu() {
    ++QCount;
    // alert(count);
    console.log(QCount);
}


function createNewSubQu() {
    ++count;
    $('#subQu').append("  <div class=\"col-lg-6 mt-3\">\n" +
        "                            <label>" + count + "</label>\n" +
        "                            <textarea class=\"form-control\" placeholder=\"Enter Your sub question\"\n" +
        "                                      rows=\"4\"></textarea>\n" +
        "                        </div>");
}

// function publishPaper() {
//
//
// }