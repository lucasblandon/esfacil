CREATE TABLE IF NOT EXISTS `PREFIX_membership_history` (
      `id_membership_history` bigint(11) AUTO_INCREMENT NOT NULL,
      `id_customer` bigint(11) NOT NULL,
      `id_product` bigint(11) NULL,
      `id_product_attribute` bigint(11) NULL,
      `id_order` bigint(11) NULL,
      `id_order_state` bigint(11) NULL,
      `quantity` bigint(11) NULL,
      `interval` varchar(64) NULL,
      `units` bigint(11) NULL,
      `date_start` datetime NULL,
      `expiry_date` datetime NULL,
      `date_add` datetime NOT NULL,
      PRIMARY KEY (`id_membership_history`),
      INDEX `idx_customer` (`id_customer`) ,
      INDEX `idx_product` (`id_product`) ,
      INDEX `idx_product_attribute` (`id_product_attribute`) ,
      INDEX `idx_order` (`id_order`)
    ) DEFAULT CHARSET=utf8;
    
    
CREATE TABLE IF NOT EXISTS `PREFIX_membership_type` (
      `id_membership_type` bigint(11) AUTO_INCREMENT NOT NULL,
      `id_product` bigint(11) NULL,
      `interval` varchar(64) NULL,
      `units` bigint(11) NULL,
      `id_group` bigint(11) NULL,
      `date_add` datetime NOT NULL,
      PRIMARY KEY (`id_membership_type`),
      INDEX `idx_product` (`id_product`),
      INDEX `idx_group` (`id_group`) 
    ) DEFAULT CHARSET=utf8;
    

CREATE TABLE IF NOT EXISTS `PREFIX_customer_membership` (
      `id_customer_membership` bigint(11) AUTO_INCREMENT NOT NULL,
      `id_customer` bigint(11) NOT NULL,
      `id_membership_type` bigint(11) NULL,
      `activation_date` datetime NULL,
      `reminder_email_date` datetime NULL,
      `origin` bigint(11) NULL,
      `activated` tinyint(1) NULL,
      `date_add` datetime NOT NULL,
      PRIMARY KEY (`id_customer_membership`),
      INDEX `idx_customer` (`id_customer`),
      INDEX `idx_membership_type` (`id_membership_type`) 
    ) DEFAULT CHARSET=utf8;
