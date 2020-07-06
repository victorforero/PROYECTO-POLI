CREATE TABLE `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='																		';

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `licencia` varchar(100) NOT NULL,
  `Rol` int(11) NOT NULL,
  `Pais` varchar(100) NOT NULL,
  `Ciudad` varchar(100) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `Rol` (`Rol`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(40) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` int(11) DEFAULT NULL,
  `Matricula` varchar(10) DEFAULT NULL,
  `Conductor` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `Marca` (`Marca`),
  KEY `Conductor` (`Conductor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE `soats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` varchar(11) NOT NULL,
  `Fecha_compra` datetime DEFAULT NULL,
  `Fecha_expiracion` datetime DEFAULT NULL,
  `Vehiculo` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `Vehiculo` (`Vehiculo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
