
$(document).ready(function () {
    $("[id^='product_options_']").change(function () {
        ensure_baseoption($(this).attr("id"));
    });
});

function ensure_baseoption(id) {
    var info = id.split("_");
    /** _agile_ if base is cleeared, must clear all other options _agile_  **/
    if (info[3] == "4" && !$("#" + id).is(':checked')) {
        $("[id^='product_options_" + info[2] + "_']").attr("checked", false);
        return;
    }
    /** _agile_ Any option is selected, must select base _agile_  **/
    if (info[3] != "4" && $("#" + id).is(':checked')) {
        $("#product_options_" + info[2] + "_4").attr("checked", true);
    }
}

