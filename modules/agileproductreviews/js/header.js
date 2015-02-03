function getRatingForList(id_product) {
    /** _agile_ alert(id_product); _agile_  **/
    var url = base_dir + '/modules/agileproductreviews/ajax_getaverage.php';
    $.post(url, { id_product: id_product },
            function (data) {
                $("div#div_apr_" + id_product).html(data);
            });
}

function getRatingForProduct(id_product) {
    var url = base_dir + '/modules/agileproductreviews/ajax_getaverage.php';
    $.post(url, { id_product: id_product },
            function (data) {
                obj = $("form#buy_block");
                html = obj.html();
                obj.html(data + html);
            });
}
