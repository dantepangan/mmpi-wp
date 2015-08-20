DROP TABLE `sa_vpn_account`;
CREATE TABLE `sa_vpn_account` (
  `vpn_account_id` 				int(11) NOT NULL AUTO_INCREMENT,
  `id_number` 					varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_email_address` 		varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,  
  `generated_key_hash`			varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generated_key_original`		varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_timestamp` 			timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `insert_timestamp` 			timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (vpn_account_id),
  KEY `id_number` (`id_number`),
  KEY `company_email_address` (`company_email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
	