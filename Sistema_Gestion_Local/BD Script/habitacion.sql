CREATE TABLE IF NOT EXISTS `habitacion` (
  `id_habitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo_hab` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL COMMENT 'Costo diario en pesos chilenos',
  `desc_habitacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_habitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;