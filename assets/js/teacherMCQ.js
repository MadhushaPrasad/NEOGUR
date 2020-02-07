var count = 1;

function newQuestion() {

    var q = $('#question').val();
    var m = $('#marks').val();
    var a1 = $('#answer01').val();
    var a2 = $('#answer02').val();
    var a3 = $('#answer03').val();
    var a4 = $('#answer04').val();
    var a5 = $('#answer05').val();

    $('#section').append("<div class=\"col-lg-12 col-md-12 col-sm-12\">\n" +
        "            <ol start=\"" + count + "\">\n" +
        "                <li>\n" +
        "                    <div class=\"row\" style=\"display: flex;justify-content: space-between\">\n" +
        "                        <h5 style=\"margin-left:15px\">" + q + "</h5>\n" +
        "                        <h5>" + m + "</h5>\n" +
        "                    </div>\n" +
        "                    <br>\n" +
        "                    <div class=\"row\">\n" +
        "                        <div class=\"input-group col-lg-4 mb-3\">\n" +
        "                            <div class=\"input-group-prepend\">\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <label for=\"as01\">01</label>\n" +
        "                                </div>\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            <div class=\"input-group-text\">\n" +
        "                                <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\"\n" +
        "                                       id=\"as01\" value=\"" + a1 + "\" disabled>\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                        <div class=\"input-group col-lg-4 mb-3\">\n" +
        "                            <div class=\"input-group-prepend\">\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <label for=\"as02\">02</label>\n" +
        "                                </div>\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            <div class=\"input-group-text\">\n" +
        "                                <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\"\n" +
        "                                       id=\"as02\" value=\"" + a2 + "\" disabled>\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                        <div class=\"input-group col-lg-4 mb-3\">\n" +
        "                            <div class=\"input-group-prepend\">\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <label for=\"as03\">03</label>\n" +
        "                                </div>\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            <div class=\"input-group-text\">\n" +
        "                                <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\"\n" +
        "                                       id=\"as03\" value=\"" + a3 + "\" disabled>\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                        <div class=\"input-group col-lg-4 mb-3\">\n" +
        "                            <div class=\"input-group-prepend\">\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <label for=\"as04\">04</label>\n" +
        "                                </div>\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            <div class=\"input-group-text\">\n" +
        "                                <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\"\n" +
        "                                       id=\"as04\" value=\"" + a4 + "\" disabled>\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                        <div class=\"input-group col-lg-4 mb-3\">\n" +
        "                            <div class=\"input-group-prepend\">\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <label for=\"as05\">05</label>\n" +
        "                                </div>\n" +
        "                                <div class=\"input-group-text\">\n" +
        "                                    <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            <div class=\"input-group-text\">\n" +
        "                                <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\"\n" +
        "                                       id=\"as05\" value=\"" + a5 + "\" disabled>\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </li>\n" +
        "            </ol>\n" +
        "        </div>");
    ++count
    $('#section01').empty();
    $('#section01').append("<div class=\"col-lg-12 formDiv\">\n" +
        "            <form class=\"formM\">\n" +
        "                <div class=\"form-row\">\n" +
        "                    <div class=\"form-group col-md-10\">\n" +
        "                        <label>" + count + "</label>\n" +
        "                        <textarea class=\"form-control\" placeholder=\"Enter Your question\"\n" +
        "                                  rows=\"4\" name=\"textArea\" id=\"question\"></textarea>\n" +
        "                    </div>\n" +
        "                    <input type=\"text\" placeholder=\"Marks\" class=\"form-control col-md-2\" id=\"marks\">\n" +
        "                </div>\n" +
        "                <div class=\"form-row\">\n" +
        "                    <div class=\"form-group col-md-4\">\n" +
        "                        <div class=\"form-check\">\n" +
        "                            <div class=\"form-check\">\n" +
        "                                <label class=\"form-check-label\">\n" +
        "                                    <input type=\"checkbox\" class=\"form-check-input\">01.\n" +
        "                                </label>\n" +
        "\n" +
        "                                <input type=\"text\" placeholder=\"Answer\" class=\"form-control\" id=\"answer01\">\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class=\"form-group col-md-4\">\n" +
        "                        <div class=\"form-check\">\n" +
        "                            <div class=\"form-check\">\n" +
        "                                <label class=\"form-check-label\">\n" +
        "                                    <input type=\"checkbox\" class=\"form-check-input\">02.\n" +
        "                                </label>\n" +
        "                                <input type=\"text\" placeholder=\"Answer\" class=\"form-control\" id=\"answer02\">\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class=\"form-group col-md-4\">\n" +
        "                        <div class=\"form-check\">\n" +
        "                            <div class=\"form-check\">\n" +
        "                                <label class=\"form-check-label\">\n" +
        "                                    <input type=\"checkbox\" class=\"form-check-input\">03.\n" +
        "                                </label>\n" +
        "                                <input type=\"text\" placeholder=\"Answer\" class=\"form-control\" id=\"answer03\">\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class=\"form-group col-md-4\">\n" +
        "                        <div class=\"form-check\">\n" +
        "                            <div class=\"form-check\">\n" +
        "                                <label class=\"form-check-label\">\n" +
        "                                    <input type=\"checkbox\" class=\"form-check-input\">04.\n" +
        "                                </label>\n" +
        "                                <input type=\"text\" placeholder=\"Answer\" class=\"form-control\" id=\"answer04\">\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class=\"form-group col-md-4\">\n" +
        "                        <div class=\"form-check\">\n" +
        "                            <div class=\"form-check\">\n" +
        "                                <label class=\"form-check-label\">\n" +
        "                                    <input type=\"checkbox\" class=\"form-check-input\">05.\n" +
        "                                </label>\n" +
        "                                <input type=\"text\" placeholder=\"Answer\" class=\"form-control\" id=\"answer05\">\n" +
        "                            </div>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "                <!--                <div class=\"form-row justify-content-end\">-->\n" +
        "                <!--                    <button title=\"Click save before create new question\" type=\"button\"-->\n" +
        "                <!--                            class=\"btn btn-success mr-2 btnSave\">-->\n" +
        "                <!--                        Save-->\n" +
        "                <!--                    </button>-->\n" +
        "                <!--                </div>-->\n" +
        "                <div class=\"form-row justify-content-end\">\n" +
        "                    <button type=\"button\"\n" +
        "                            title=\"Create a new question\"\n" +
        "                            class=\"btn btn-light mt-2 mr-2\"\n" +
        "                            onclick=\"newQuestion()\"\n" +
        "                            style=\"border-radius: 20px\"\n" +
        "                            id=\"btnNew\"\n" +
        "                    >\n" +
        "                        +\n" +
        "                    </button>\n" +
        "                </div>\n" +
        "            </form>\n" +
        "        </div>");

};


var qDiv = "<div>\n" +
    "            <ol>\n" +
    "                <li>\n" +
    "                    <p></p>\n" +
    "                    <ol>\n" +
    "                        <li style=\"display: flex;flex-direction: row\">where are you live<input type=\"checkbox\"\n" +
    "                                                                                               class=\"form-check-input\">\n" +
    "                        </li>\n" +
    "                        <li style=\"display: flex;flex-direction: row\">where are you live<input type=\"checkbox\"\n" +
    "                                                                                               class=\"form-check-input\">\n" +
    "                        </li>\n" +
    "                        <li style=\"display: flex;flex-direction: row\">where are you live<input type=\"checkbox\"\n" +
    "                                                                                               class=\"form-check-input\">\n" +
    "                        </li>\n" +
    "                        <li style=\"display: flex;flex-direction: row\">where are you live<input type=\"checkbox\"\n" +
    "                                                                                               class=\"form-check-input\">\n" +
    "                        </li>\n" +
    "                        <li style=\"display: flex;flex-direction: row\">where are you live<input type=\"checkbox\"\n" +
    "                                                                                               class=\"form-check-input\">\n" +
    "                        </li>\n" +
    "                    </ol>\n" +
    "                    <p style=\"position: absolute;top: 48px;left: 219px;\">5</p>\n" +
    "                </li>\n" +
    "            </ol>\n" +
    "        </div>";

function getPublish() {
    function isEmpty(el) {
        return !$.trim(el.html())
    }

    if (isEmpty($('#section'))) {
        alert("Error");
    } else {
        $('#section01,#buttonDiv').css("display", "none");
    }
};

