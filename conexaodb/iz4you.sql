/*
 Navicat MySQL Data Transfer

 Source Server         : IZ4YOU
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : iz4you

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 18/11/2018 14:25:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso`  (
  `CursoID` int(5) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TempoCursoAnos` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`CursoID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of curso
-- ----------------------------
INSERT INTO `curso` VALUES (2, 'Psicologia', 5);
INSERT INTO `curso` VALUES (3, 'Direito', 5);
INSERT INTO `curso` VALUES (4, 'Odontologia', 5);
INSERT INTO `curso` VALUES (5, 'Engenharia Civil', 5);
INSERT INTO `curso` VALUES (6, 'Ciencias Contabeis', 4);
INSERT INTO `curso` VALUES (7, 'Recursos Humanos', 2);
INSERT INTO `curso` VALUES (8, 'Medicina', 6);
INSERT INTO `curso` VALUES (9, 'Nutricao', 4);
INSERT INTO `curso` VALUES (10, 'Fisioterapia', 5);
INSERT INTO `curso` VALUES (11, 'Eduacacao Fisica', 5);
INSERT INTO `curso` VALUES (12, 'Arquitetura e Hurbanismo', 4);
INSERT INTO `curso` VALUES (13, 'Farmacia', 4);
INSERT INTO `curso` VALUES (14, 'Letras', 4);
INSERT INTO `curso` VALUES (15, 'Sistemas de Informação', 4);
INSERT INTO `curso` VALUES (16, 'Psicologia', 5);

-- ----------------------------
-- Table structure for pergunta
-- ----------------------------
DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE `pergunta`  (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  PRIMARY KEY (`idPergunta`) USING BTREE,
  INDEX `idUsuario`(`idUsuario`) USING BTREE,
  INDEX `idCurso`(`idCurso`) USING BTREE,
  CONSTRAINT `idCurso` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`CursoID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`usuarioID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pergunta
-- ----------------------------
INSERT INTO `pergunta` VALUES (3, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 41, 5);
INSERT INTO `pergunta` VALUES (4, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 41, 3);

-- ----------------------------
-- Table structure for resposta
-- ----------------------------
DROP TABLE IF EXISTS `resposta`;
CREATE TABLE `resposta`  (
  `idResposta` int(11) NOT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idPergunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idResposta`) USING BTREE,
  INDEX `idPergunta`(`idPergunta`) USING BTREE,
  INDEX `idUser`(`idUsuario`) USING BTREE,
  CONSTRAINT `idPergunta` FOREIGN KEY (`idPergunta`) REFERENCES `pergunta` (`idPergunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `idUser` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`usuarioID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `CPD` int(6) NOT NULL,
  `Nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Semestre` int(2) NOT NULL,
  `Telefone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Senha` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `IzCoins` int(255) UNSIGNED NOT NULL,
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `CursoID` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`usuarioID`, `CPD`) USING BTREE,
  INDEX `usuarioID`(`usuarioID`) USING BTREE,
  INDEX `CusoID`(`CursoID`) USING BTREE,
  CONSTRAINT `CusoID` FOREIGN KEY (`CursoID`) REFERENCES `curso` (`CursoID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (44124, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', '634a816c49e4', 1000000, 41, 14);
INSERT INTO `usuario` VALUES (15241, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', 'e10adc3949ba', 0, 42, NULL);
INSERT INTO `usuario` VALUES (15242, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', 'e10adc3949ba', 0, 43, NULL);
INSERT INTO `usuario` VALUES (15243, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', 'e10adc3949ba', 0, 44, NULL);
INSERT INTO `usuario` VALUES (55432, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', '4297f44b1395', 0, 45, NULL);
INSERT INTO `usuario` VALUES (52104, 'Daniel Sousa de Oliveira', 1, '61982376234', 'daniel@gmail.com', '4297f44b1395', 100000, 46, NULL);
INSERT INTO `usuario` VALUES (12345, 'Teste ID curso', 1, '12312312311', 'daniel@gmail.com', '4297f44b1395', 0, 47, 4);
INSERT INTO `usuario` VALUES (12342, 'Guilherme PNC', 1, '12312312312', 'VSFD@gmail.com', '4297f44b1395', 0, 48, 6);

SET FOREIGN_KEY_CHECKS = 1;
