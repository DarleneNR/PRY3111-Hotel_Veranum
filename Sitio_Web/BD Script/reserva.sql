CREATE TABLE IF NOT EXISTS `reserva_hab` (
    `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
    `fecha_ingreso` date NOT NULL COMMENT 'Fecha de ingreso a la habitación reservada',
    `fecha_salida` date NOT NULL COMMENT 'Fecha de salida a la habitación reservada',
    `dias_reserva` int(11) NOT NULL,
    `total_pago_sin_desc` float NOT NULL,
    `total_pago_con_desc` float NOT NULL,
    `numero_hab` int(11) NOT NULL,
    `hotel_id_sucursal` int(11) NOT NULL,
    `numrun_cli` int(11) NOT NULL,
    `id_servicio` int(11) NOT NULL,
    `numrun_recep` int(11) NOT NULL,
    `id_descuento` int(11) NOT NULL,
    `id_metodo` int(11) NOT NULL,
    PRIMARY KEY (`id_reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
