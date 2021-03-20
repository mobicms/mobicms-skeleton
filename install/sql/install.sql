--
-- Drop tables if exists
--
DROP TABLE IF EXISTS `system__session`;

--
-- Table structure for table `system__session`
--
CREATE TABLE `system__session` (
  `id`       CHAR(32)         NOT NULL  DEFAULT '',
  `modified` INT(10) UNSIGNED NOT NULL  DEFAULT 0,
  `lifetime` INT(10) UNSIGNED NOT NULL  DEFAULT 0,
  `data`     BLOB             NOT NULL,
  PRIMARY KEY (`id`(8)) USING BTREE
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;
