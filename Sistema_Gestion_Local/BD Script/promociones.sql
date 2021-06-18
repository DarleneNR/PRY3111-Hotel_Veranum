CREATE TABLE IF NOT EXISTS `promociones_extras` (
  `id_promocion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_promocion` varchar(150) NOT NULL,
  `precio` int(11) NOT NULL COMMENT 'Costo diario en pesos chilenos',
  `desc_promocion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_promocion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;