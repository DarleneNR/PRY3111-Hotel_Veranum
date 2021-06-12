CREATE TABLE IF NOT EXISTS `servicios_extras` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(150) NOT NULL,
  `precio` int(11) NOT NULL COMMENT 'Costo diario en pesos chilenos',
  `desc_servicio` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;