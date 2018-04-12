-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sql9232329
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sql9232329
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sql9232329` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sql9232329` ;

-- -----------------------------------------------------
-- Table `sql9232329`.`aula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`aula` (
  `IdAula` INT NOT NULL COMMENT '',
  `asientos` INT NOT NULL COMMENT '',
  `size` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`IdAula`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sql9232329`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`empleado` (
  `CI` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `telefono` VARCHAR(45) NULL COMMENT '',
  `direccion` VARCHAR(45) NULL COMMENT '',
  `empleadocol` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`CI`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sql9232329`.`reporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`reporte` (
  `idReporte` INT NULL COMMENT '',
  `AsientosCola` VARCHAR(45) NULL COMMENT '',
  `AsientosReparados` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idReporte`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sql9232329`.`ManAndLimp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`ManAndLimp` (
  `aula_IdAula` INT NULL COMMENT '',
  `empleado_CI` INT NULL COMMENT '',
  `reporte_idReporte` INT NOT NULL COMMENT '',
  PRIMARY KEY (`aula_IdAula`, `empleado_CI`, `reporte_idReporte`)  COMMENT '',
  INDEX `fk_ManAndLimp_empleado1_idx` (`empleado_CI` ASC)  COMMENT '',
  UNIQUE INDEX `aula_IdAula_UNIQUE` (`aula_IdAula` ASC)  COMMENT '',
  UNIQUE INDEX `empleado_CI_UNIQUE` (`empleado_CI` ASC)  COMMENT '',
  INDEX `fk_ManAndLimp_reporte1_idx` (`reporte_idReporte` ASC)  COMMENT '',
  CONSTRAINT `fk_ManAndLimp_aula`
    FOREIGN KEY (`aula_IdAula`)
    REFERENCES `sql9232329`.`aula` (`IdAula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ManAndLimp_empleado1`
    FOREIGN KEY (`empleado_CI`)
    REFERENCES `sql9232329`.`empleado` (`CI`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ManAndLimp_reporte1`
    FOREIGN KEY (`reporte_idReporte`)
    REFERENCES `sql9232329`.`reporte` (`idReporte`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sql9232329`.`fecha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`fecha` (
  `idfecha` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`idfecha`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sql9232329`.`horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sql9232329`.`horario` (
  `IdAula` INT NOT NULL COMMENT '',
  `1turno` VARCHAR(45) NULL COMMENT '',
  `2turno` VARCHAR(45) NULL COMMENT '',
  `3turno` VARCHAR(45) NULL COMMENT '',
  `4turno` VARCHAR(45) NULL COMMENT '',
  `5turno` VARCHAR(45) NULL COMMENT '',
  `6turno` VARCHAR(45) NULL COMMENT '',
  `aula_IdAula` INT NOT NULL COMMENT '',
  `fecha_idfecha` DATETIME NOT NULL COMMENT '',
  UNIQUE INDEX `IdAula_UNIQUE` (`IdAula` ASC)  COMMENT '',
  PRIMARY KEY (`aula_IdAula`, `fecha_idfecha`)  COMMENT '',
  INDEX `fk_horario_fecha1_idx` (`fecha_idfecha` ASC)  COMMENT '',
  CONSTRAINT `fk_horario_aula1`
    FOREIGN KEY (`aula_IdAula`)
    REFERENCES `sql9232329`.`aula` (`IdAula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_horario_fecha1`
    FOREIGN KEY (`fecha_idfecha`)
    REFERENCES `sql9232329`.`fecha` (`idfecha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
