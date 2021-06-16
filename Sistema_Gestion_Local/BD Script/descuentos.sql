CREATE TABLE `descuentos` (
  `id_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo_desc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `porc_desc` float NOT NULL,
  `estado_desc` int(11) DEFAULT NULL,
  `fecha_ini_desc` date NOT NULL COMMENT 'Fecha de inicio para la disponibilidad del descuento',
  `fecha_fin_desc` date NOT NULL COMMENT 'Fecha final para la disponibilidad del descuento',
  PRIMARY KEY (`id_descuento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;