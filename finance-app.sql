-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela myfinance.usuarios: ~4 rows (aproximadamente)
INSERT IGNORE INTO `usuarios` (`id_user`, `nome`, `sobrenome`, `email`, `senha`, `chave_recuperar_senha`) VALUES
	(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$P9e/oac5REv43f4lfBRF7OVDsN9eoGGwSw6NEViSUeoQdJ.GcKc4e', '$2y$10$sUuNzdAv7DqrWO1t/sXVoex1bsSYczAy68zdO.wz0ToHpQGQ9cSf2'),
	(2, 'teste', 'teste', 'teste@gmail.com', '$2y$10$RlQj2CZEvGfM3mnPv9CXeOWNkFCqH.N69hUzC4AHtTb4kEOjb3HIi', 'testeeee'),
	(3, 'NATAN', 'DA SILVA', 'natanssilva10@gmail.com', '$2y$10$kXFiiEy.t/YnGiGGZR6AKu5OHgxgqFpZl0Y.Tj/99Em9N.HyTcBQ2', 'NULL'),
	(4, 'fernandoTESTE', 'TESTE', 'fernandoadri760@gmail.com', '$2y$10$JoBXbu0HnuVbVE2BPtCP6OcWLqnvS/NmN4OSHBpYWNAG2UL32XLPe', '$2y$10$l1A8uxjDO3H3Uw4dbZBeIOKDdEbI6n/DQwuPrAWsmFNBpogZCIEb6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
