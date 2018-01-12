-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema yii2escalero
-- -----------------------------------------------------
-- Wifi Web Developer Kurs, 2. Diplomprojektarbeit, Escalero2. 

-- -----------------------------------------------------
-- Schema yii2escalero
--
-- Wifi Web Developer Kurs, 2. Diplomprojektarbeit, Escalero2. 
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `yii2escalero` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci ;
USE `yii2escalero` ;

-- -----------------------------------------------------
-- Table `yii2escalero`.`spieler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yii2escalero`.`spieler` (
  `spielerID` INT NOT NULL AUTO_INCREMENT,
  `spielerSpitzname` VARCHAR(25) NOT NULL,
  `spielerAngemeldet` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`spielerID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
