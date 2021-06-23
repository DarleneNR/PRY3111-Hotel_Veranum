CREATE TABLE IF NOT EXISTS `habitacion` (
  `id_habitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo_hab` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_banio` int(11) NOT NULL,
  `cantidad_cama` int(11) NOT NULL,
  `precio` int(11) NOT NULL COMMENT 'Costo diario en pesos chilenos',
  `desc_habitacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `precio_base` int NOT NULL AUTO_INCREMENT COLLATE utf8_unicode_ci COMMENT 'Costo diario fijo del tipo de habitación en pesos chilenos',
  `estado_disp` int NOT NULL DEFAULT 1 COMMENT 'Estados: (1) Disponible. (2) No Disponible',
  PRIMARY KEY (`id_habitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;