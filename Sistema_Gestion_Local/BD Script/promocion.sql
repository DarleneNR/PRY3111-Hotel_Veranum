CREATE TABLE promocion (
  id_promocion int(11) NOT NULL AUTO_INCREMENT,
  nombre_prom varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  pago_minimo int(11) NOT NULL COMMENT 'Valor en pesos chilenos',
  pago_maximo int(11) NOT NULL COMMENT 'Valor en pesos chilenos',
  porc_promocion float NOT NULL,
  comentario varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id_promocion)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;