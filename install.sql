DROP TABLE IF EXISTS `{#}complaints`;
CREATE TABLE IF NOT EXISTS `{#}complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orfo` varchar(300) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;