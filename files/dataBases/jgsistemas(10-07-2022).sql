-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla jgsistemas.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.category: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
REPLACE INTO `category` (`id`, `category`, `status`) VALUES
	(1, 'Producto de limpieza hogar', 1),
	(2, 'Cuidado personal', 1),
	(74, 'ferreteria industrial', 1),
	(75, 'comida animal', 1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_1` varchar(100) NOT NULL DEFAULT '',
  `code_2` varchar(100) DEFAULT NULL,
  `description` varchar(155) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `measure` varchar(50) DEFAULT NULL,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `observation` varchar(255) DEFAULT NULL,
  `actual_stock` int(11) DEFAULT NULL,
  `reserved_stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `code_1` (`code_1`),
  KEY `FK_product_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.product: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`id`, `code_1`, `code_2`, `description`, `expiration`, `status`, `category_id`, `measure`, `cost_price`, `sale_price`, `brand`, `weight`, `observation`, `actual_stock`, `reserved_stock`) VALUES
	(8, '3423423', '8889997000', 'toallas sanitarias melodia pack 1', '2024-08-01', 1, 2, 'Und', 5.00, 7.00, 'toallin', '', '', 100, 20),
	(9, '123456', '8877', 'Shampoo acondicionar pantene ', '0000-00-00', 1, 2, 'Und', 1.60, 2.80, 'Fisa', '2.5 kg', 'La caja no tiene fecha de vencimiento', 300, 100),
	(10, '9654321', '00001', 'Spray limpiador glade', '0000-00-00', 1, 1, 'Und', 0.70, 1.54, 'glade', '20', '', 100, 10),
	(11, '156666', '', 'Jabón aromático', '0000-00-00', 1, 74, 'Und', 15.00, 13.00, 'protex', '', NULL, 100, 10),
	(12, '3333333', '44444444', 'Tinte de cabello', '2027-11-10', 1, 2, 'Und', 1.50, 2.50, 'Loreal', '10 grm', NULL, 150, 10),
	(13, '789456123', '2233333', 'Jabon liquido 2lts', '2024-02-01', 1, 2, 'Und', 0.75, 1.25, 'Odin', '200grm', '', 170, 10);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.product_has_supplier
CREATE TABLE IF NOT EXISTS `product_has_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_code_1` varchar(50) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.product_has_supplier: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `product_has_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_has_supplier` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.rate
CREATE TABLE IF NOT EXISTS `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bcv` decimal(10,2) DEFAULT NULL,
  `parallel` decimal(10,2) DEFAULT NULL,
  `other_1` decimal(10,2) DEFAULT NULL,
  `other_2` decimal(10,2) DEFAULT NULL,
  `other_3` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.rate: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
REPLACE INTO `rate` (`id`, `bcv`, `parallel`, `other_1`, `other_2`, `other_3`) VALUES
	(1, 5.70, 5.84, 0.00, 0.00, 0.00);
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` varchar(100) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `phone_1` varchar(50) NOT NULL DEFAULT '0',
  `phone_2` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(155) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(155) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.supplier: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
REPLACE INTO `supplier` (`id`, `id_supplier`, `name`, `phone_1`, `phone_2`, `address`, `email`, `description`, `status`) VALUES
	(2, '222222', '33333', '444444', '5555', '7777', '66666', '788888', 1),
	(3, '00001', 'Inversiones los 3 juanes', '0142998855', '', 'Conjunto residencial perira local 5', 'inversionesls3juanes@gmail.com', 'nuevo proveedor', 1);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.tax
CREATE TABLE IF NOT EXISTS `tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_1` decimal(10,2) DEFAULT NULL,
  `tax_2` decimal(10,2) DEFAULT NULL,
  `tax_3` decimal(10,2) DEFAULT NULL,
  `tax_4` decimal(10,2) DEFAULT NULL,
  `tax_5` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.tax: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tax` DISABLE KEYS */;
REPLACE INTO `tax` (`id`, `tax_1`, `tax_2`, `tax_3`, `tax_4`, `tax_5`) VALUES
	(1, 16.00, 2.00, 0.00, 0.00, 0.00);
/*!40000 ALTER TABLE `tax` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
