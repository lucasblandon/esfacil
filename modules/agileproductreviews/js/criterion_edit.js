$(document).ready(function () {
    fill_criteria_edit_form(0);
});


function fill_criteria_edit_form(id) {
    $.post(thePath + 'ajax_criterion_edit.php', { id: id },
    function (data) {
        /** _agile_                 alert(data); _agile_  **/
        document.getElementById('divCriterionForm').innerHTML = data;
        hookApplyToChangeEvents();
        hideShow($("input[name='applyto']:checked").val());
    });
}

function hookApplyToChangeEvents() {
    $("input[id^='applyto_']").click(function () {
        /** _agile_ $("select[^='applyto_']).hide(); _agile_  **/
        hideShow($(this).val());
    });

}

function hideShow(apply_to) {
    /** _agile_ alert(apply_to); _agile_  **/
    if (apply_to == 2) {
        $('select#applyto_category_ids').show();
        $('select#applyto_product_ids').hide();
    }
    else if (apply_to == 3) {
        $('select#applyto_category_ids').hide();
        $('select#applyto_product_ids').show();
    }
    else {
        $('select#applyto_category_ids').hide();
        $('select#applyto_product_ids').hide();
    }
}

