/*
 Navicat MySQL Data Transfer

 Source Server         : ambr
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : iz4you

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 16/11/2018 11:39:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso`  (
  `CursoID` int(5) NOT NULL,
  `Nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TempoCursoAnos` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`CursoID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for duvida
-- ----------------------------
DROP TABLE IF EXISTS `duvida`;
CREATE TABLE `duvida`  (
  `Descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `DuvidaID` int(11) NOT NULL AUTO_INCREMENT,
  `IDCurso` int(11) NOT NULL,
  `DisciplinaID` int(11) NOT NULL,
  PRIMARY KEY (`DuvidaID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pergunta
-- ----------------------------
DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE `pergunta`  (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idPergunta`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for resposta
-- ----------------------------
DROP TABLE IF EXISTS `resposta`;
CREATE TABLE `resposta`  (
  `idResposta` int(11) NOT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idPergunta` int(11) NOT NULL,
  PRIMARY KEY (`idResposta`) USING BTREE,
  INDEX `idPergunta`(`idPergunta`) USING BTREE,
  CONSTRAINT `idPergunta` FOREIGN KEY (`idPergunta`) REFERENCES `pergunta` (`idPergunta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `CPD` int(6) NOT NULL,
  `Nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Curso` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `IDCurso` int(5) NULL DEFAULT NULL,
  `Semestre` int(2) NOT NULL,
  `Telefone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Senha` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `IzCoins` int(255) NOT NULL,
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`usuarioID`, `CPD`) USING BTREE,
  INDEX `IDCurso`(`IDCurso`) USING BTREE,
  CONSTRAINT `IDCurso` FOREIGN KEY (`IDCurso`) REFERENCES `curso` (`CursoID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
