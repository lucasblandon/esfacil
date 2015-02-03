CREATE TABLE IF NOT EXISTS `PREFIX_agile_review` (
  `id_agile_review` int(10) unsigned NOT NULL auto_increment,
  `id_product` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,  
  `customer` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `grade` float unsigned NOT NULL,
  `validate` tinyint(1) NOT NULL,
  `ip_address` varchar(64) NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_agile_review`)
)  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_agile_criterion` (
  `id_agile_criterion` int(10) unsigned NOT NULL auto_increment,
  `apply_to` int(10) NULL,
  `apply_to_ids` text NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_agile_criterion`)
)  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `PREFIX_agile_criterion_lang` (
  `id_agile_criterion_lang` int(10) unsigned NOT NULL auto_increment,
  `id_agile_criterion` int(10),
  `id_lang` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id_agile_criterion_lang`)
)  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `PREFIX_agile_criterion_product` (
  `id_product` int(10) unsigned NOT NULL,
  `id_agile_criterion` int(10) unsigned NOT NULL,
  PRIMARY KEY(`id_product`, `id_agile_criterion`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_agile_review_grade` (
  `id_agile_review` int(10) unsigned NOT NULL,
  `id_agile_criterion` int(10) unsigned NOT NULL,
  `grade` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_agile_review`, `id_agile_criterion`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_agile_review_voting` (
  `id_agile_voting` int(10) unsigned NOT NULL auto_increment,
  `id_agile_review` int(10) unsigned NOT NULL,
  `ip_address` varchar(64) NULL,
  `vote` varchar(32) NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_agile_voting`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_agile_review_request` (
  `id_order` int(10) unsigned NOT NULL,
  `date_sent` datetime NOT NULL,
  PRIMARY KEY (`id_order`)
) DEFAULT CHARSET=utf8;