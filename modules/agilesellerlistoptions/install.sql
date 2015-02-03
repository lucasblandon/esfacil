/*staus: 0 not selected, 1: selected-not paid, 2: selected and paid*/
CREATE TABLE IF NOT EXISTS `PREFIX_seller_listoption` (
      `id_product` bigint(11) NULL,
      `id_option` bigint(11) NULL,
      `price` decimal(20,6) NULL,
      `date_start` datetime  NULL,
      `status` int NOT NULL default 0,
      `date_end` datetime NULL,
      PRIMARY KEY (`id_product`,`id_option`)
    ) DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `PREFIX_seller_paymentlog` (
      `id_seller_paymentlog` bigint(11) AUTO_INCREMENT NOT NULL,
      `id_seller` bigint(11) NULL,
      `id_cart` bigint(11) NULL,
      `id_order` bigint(11) NULL,
      `date_add` datetime NULL,
      PRIMARY KEY (`id_seller_paymentlog`)
    ) DEFAULT CHARSET=utf8;
