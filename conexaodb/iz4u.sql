/*
 Navicat MySQL Data Transfer

 Source Server         : IZ4U
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : iz4u

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 03/11/2018 16:32:28
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
-- Records of curso
-- ----------------------------
INSERT INTO `curso` VALUES (1, 'Sistemas de Informacao', 4);

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
  PRIMARY KEY (`CPD`) USING BTREE,
  INDEX `IDCurso`(`IDCurso`) USING BTREE,
  CONSTRAINT `IDCurso` FOREIGN KEY (`IDCurso`) REFERENCES `curso` (`CursoID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (12222, 'Alessandro pinto pequeno', 'Sistemas de InformaÃ§Ã£o', NULL, 1, '666666666', 'daniel.oliveira.blv.13@gmail.com', '123456', 0);
INSERT INTO `usuario` VALUES (12345, 'Tim Maia', '', 1, 4, '(61)31245-1234', 'timmaiapnc@gmail.com', '1234556', 0);
INSERT INTO `usuario` VALUES (22222, 'Japones da Federal', '', 1, 4, '(12)12345-6789', 'japfed@gmail.com', '123123', 0);
INSERT INTO `usuario` VALUES (39825, 'rfwyrjtkwrj', 'pau no cu do alex', NULL, 1, '111111111', 'a@sw', 'Gyy', 0);
INSERT INTO `usuario` VALUES (40754, 'Alex Ferreira', 'Sistemas de InformaÃ§Ã£o', NULL, 4, '6198517970', 'alex.clayton94@gmail.com', '210612', 0);
INSERT INTO `usuario` VALUES (41111, 'Jonnathan Oliveira', 'Sistemas de InformaÃ§Ã£o', NULL, 3, '61982376234', 'daniel.oliveira.blv.13@gmail.com', 'suelly1452', 0);
INSERT INTO `usuario` VALUES (44124, 'Daniel', '', 1, 3, '(61)98237-6234', 'daniel.oliveira.blv.13@gmail.com', 'suelly1452', 0);
INSERT INTO `usuario` VALUES (44521, 'Caruso', '', 1, 4, '(61)98237-2662', 'carusopnc@gmail.com', '12345', 0);
INSERT INTO `usuario` VALUES (71217, 'Daniel Sousa de Oliveira', 'Sistemas de InformaÃ§Ã£o', NULL, 4, '61982376234', 'daniel.oliveira.blv.13@gmail.com', '', 0);
INSERT INTO `usuario` VALUES (111111, 'Jonnathan Oliveira', 'Sistemas de InformaÃ§Ã£o', NULL, 3, '61982376234', 'daniel.oliveira.blv.13@gmail.com', '123456', 0);
INSERT INTO `usuario` VALUES (123456, 'Veronica', 'Sistemas de InformaÃ§Ã£o', NULL, 3, '61982376234', 'daniel.oliveira.blv.13@gmail.com', 'suelly1452', 0);
INSERT INTO `usuario` VALUES (441244, 'daniek', '1', NULL, 1, '123123', 'daniel.oliveira.blv.13@gmail.com', '1', 0);

SET FOREIGN_KEY_CHECKS = 1;
