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

 Date: 18/11/2018 13:45:29
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
) ENGINE = InnoDB AUTO_INCREMENT = 48 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
