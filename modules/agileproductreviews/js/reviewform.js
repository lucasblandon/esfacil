$(document).ready(function () {
    initsettings();
});


function get_review_contents(p, n, my_lang_only) {
    var url = baseDir + 'modules/agileproductreviews/ajax_tabcontent.php';
    $.post(url, { id_product: id_product, p: p, n: n, my_lang_only: my_lang_only },
	function (data) {
	    $("div#divTabContent").html(data);
	    initsettings();
	});
}

function initsettings() {
    closeOpenReviewForm();
    $("img[id^='stars_']").click(function () {
        refinfo = $(this).attr('refinfo');
        $('input#' + refinfo).val($(this).attr('refval'));
        na = $(this).attr('name');
        setStartImage(na, refinfo);
    });

    $("img[id^='stars_']").mouseover(function () {
        na = $(this).attr('name');
        ex = "img[id^='" + na + "_']";
        $(ex).attr("style", "margin:-32px 0px 0px 0px;cursor:pointer");
    });

    $("img[id^='stars_']").mouseout(function () {
        na = $(this).attr('name');
        refinfo = $(this).attr('refinfo');
        setStartImage(na, refinfo);
    });

    $('div#idTab5 div[id=pagination] a').click(function () {
        my_lang_only = 0;
        if ($('input#my_lang_only').is(':checked')) my_lang_only = 1;
        var url = $(this).attr("href");
        var p = getQuerystringParam(url, "p", "");
        if (p == "") p = 1;
        var n = getQuerystringParam(url, "n", "");
        if (n == "") n = 10;
        /** _agile_         alert("p:" + p + " n:" + n); _agile_  **/
        get_review_contents(p, n, my_lang_only);
        return false;
    });

    $('input#my_lang_only').click(function () {
        var my_lang_only = 0;
        if ($('input#my_lang_only').is(':checked')) my_lang_only = 1;
        var n = $('div#idTab5 select#nb_item').val();
        if (n == undefined) n = 10;
        get_review_contents(1, n, my_lang_only);
    });

    /** _agile_ hook page size form submit event (override existing one) _agile_  **/
    $('div#idTab5 div[id=pagination] form').submit(function () {
        var my_lang_only = 0;
        if ($('input#my_lang_only').is(':checked')) my_lang_only = 1;
        var n = $('div#idTab5 select#nb_item').val();
        get_review_contents(1, n, my_lang_only);
        return false;
    });

}

/** _agile_ tootgle  review form _agile_  **/
function toogleReviewForm() {
    agilereviewform_open = !agilereviewform_open;
    closeOpenReviewForm();
}

function closeOpenReviewForm() {
    if (agilereviewform_open) {
        $('#sendReview').show();
        $('input#addReviewButton').hide();
    }
    else {
        $('#sendReview').hide();
        $('input#addReviewButton').show();
    }
}


function post_productreviewmessage() {
    var url = baseDir + 'modules/agileproductreviews/ajax_postreviewmessage.php';
    var data = {};
    data['apr_anti_spam_code'] = $("#apr_anti_spam_code").val();
    data['id_product'] = id_product;
    data['apr_customer'] = $("#apr_customer").val();
    data['apr_content'] = $("#apr_content").val();
    data['submitMessage'] = 1;
    var nbr = parseInt($("#apr_criterions_nbr").val());
    for (i = 1; i <= nbr; i++) {
        data['grade_' + i] = $("#grade_" + i).val();
        data['id_agile_criterion_' + i] = $("#id_agile_criterion_" + i).val();
    }
    /** _agile_     alert("??" + nbr); _agile_  **/
    $.post(url, data,
	function (msg) {
	    /** _agile_ 	    alert("??" + msg); _agile_  **/
	    msg = trim(msg);
	    res = msg.split(":", 2)
	    if (res[0] == 'OK') {
	        var my_lang_only = 0;
	        if ($('input#my_lang_only').is(':checked')) my_lang_only = 1;
	        get_review_contents(1, 10, my_lang_only);
	        agilereviewform_open = 0;
	        closeOpenReviewForm();
	        $("#divMsg").html(res[1]);
	        $("#divMsg").show();
	    }
	    else {
	        alert(res[1]);
	    }
	});

}

function setStartImage(na, refinfo) {
    /** _agile_ alert(refinfo); _agile_  **/
    ex = "img[id^='" + na + "_']";
    rank = $('input#' + refinfo).val();
    $.each($(ex), function (index, obj) {
        /** _agile_         alert(index + ': ' + obj); _agile_  **/
        if ((index + 1) > rank)
            $(obj).attr("style", "margin:0px 0px 0px 0px;cursor:pointer");
        else
            $(obj).attr("style", "margin:-16px 0px 0px 0px;cursor:pointer");
    });
}


function cast_review_voting(path, id_review) {
    name = 'review_voting_' + id_review;
    vote = $("input:radio[name=" + name + "]:checked").val();
    $.post(path + 'ajax_voting.php', { id_review: id_review, vote: vote },
	function (data) {
	    data = trim(data);
	    res = data.split(":", 2)
	    alert(res[1]);

	    if (res[0] == "NG") return;
	    if (vote == "yes") {
	        oldval = parseInt($("#span_yes_" + id_review).html());
	        oldval = oldval + 1;
	        $("#span_yes_" + id_review).html(oldval)
	    }
	    if (vote == "no") {
	        oldval = parseInt($("#span_no_" + id_review).html());
	        oldval = oldval + 1;
	        $("#span_no_" + id_review).html(oldval)
	    }
	});
}
