-- --------------------------------------------------------
-- Host:                         192.108.24.154
-- Versión del servidor:         10.1.41-MariaDB-0+deb9u1 - Debian 9.9
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Hecho por mi Volcando datos para la tabla componente2.region: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `cat_regiones` DISABLE KEYS */;
INSERT INTO `cat_regiones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Tantoyuca', NULL, NULL),
	(2, 'Poza Rica', NULL, NULL),
	(3, 'Xalapa', NULL, NULL),
	(4, 'Cordoba', NULL, NULL),
	(5, 'Veracruz', NULL, NULL),
	(6, 'Cosamaloapan', NULL, NULL),
	(7, 'Coatzacoalcos', NULL, NULL),
	(8, 'Otro', NULL, NULL),
	(9, 'FGE', '0000-00-00 00:00:00', NULL);
/*!40000 ALTER TABLE `cat_regiones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
