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

-- Volcando estructura para tabla jgsistemas.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.brand: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.category: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
REPLACE INTO `category` (`id`, `category`, `status`) VALUES
	(1, 'Producto de limpieza hogar', 1),
	(2, 'Cuidado personal', 0),
	(74, 'ferreteria', 0),
	(75, 'comida animal', 0),
	(76, 'sdasdsdsd', 0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.measurement
CREATE TABLE IF NOT EXISTS `measurement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_of_measurement` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.measurement: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `measurement` DISABLE KEYS */;
/*!40000 ALTER TABLE `measurement` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.price
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `FK_price_product` (`product_id`),
  CONSTRAINT `FK_price_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.price: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
/*!40000 ALTER TABLE `price` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_1` varchar(100) NOT NULL DEFAULT '',
  `code_2` varchar(100) DEFAULT NULL,
  `description` varchar(155) DEFAULT NULL,
  `localitation` varchar(100) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `measurement_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `code_1` (`code_1`),
  KEY `FK_product_measurement` (`measurement_id`),
  KEY `FK_product_category` (`category_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_product_measurement` FOREIGN KEY (`measurement_id`) REFERENCES `measurement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.product: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Volcando estructura para tabla jgsistemas.product_has_brand
CREATE TABLE IF NOT EXISTS `product_has_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `product_code_1` varchar(100) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.product_has_brand: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `product_has_brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_has_brand` ENABLE KEYS */;

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

-- Volcando estructura para tabla jgsistemas.stock
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actual_stock` int(11) NOT NULL DEFAULT '0',
  `reserved_stock` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `FK_stock_product` (`product_id`),
  CONSTRAINT `FK_stock_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.stock: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;

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
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jgsistemas.supplier: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
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
	(1, 25.00, 0.00, 0.00, 0.00, 0.00);
/*!40000 ALTER TABLE `tax` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
