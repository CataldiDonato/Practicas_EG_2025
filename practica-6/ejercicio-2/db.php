<?php
$host = "localhost";
$usuario = "root";
$contrasena = "0770";
$basededatos = "ciudades"; 

$conexion = new mysqli($host, $usuario, $contrasena, $basededatos, 3306);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>


<!-- ** para crear la base de datos **
--
-- Table structure for table `capitales`
--

DROP TABLE IF EXISTS `capitales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `capitales` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `ciudad` varchar(45) NOT NULL,
    `pais` varchar(45) NOT NULL,
    `habitantes` int(11) NOT NULL,
    `superficie` decimal(10,2) NOT NULL,
    `tiene_metro` tinyint(4) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitales`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (1,'buenos aires','argentina',888111,333.33,1);
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-28 18:12:14 -->