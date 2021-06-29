
CREATE TABLE `cliente` (
  `numrut_cli` int(14) NOT NULL,
  `dv_rut` varchar(1) NOT NULL,
  `nombre_cli` varchar(30) NOT NULL,
  `apellido_cli` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre_user` varchar(20) NOT NULL COMMENT 'Los nombres de usuarios deberán ser únicos (no repetibles)',
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`numrut_cli`),
  UNIQUE KEY `nombre_user` (`nombre_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
