CREATE TABLE `servicios_extras` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(150) NOT NULL,
  `desc_servicio` varchar(300) DEFAULT NULL,
  `precio` int(11) NOT NULL COMMENT 'Costo diario en pesos chilenos',
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4