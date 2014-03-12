SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`location` ;

CREATE TABLE IF NOT EXISTS `mydb`.`location` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `country` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `streetname` VARCHAR(100) NULL,
  `number` VARCHAR(10) NULL,
  `zipcode` VARCHAR(10) NULL,
  `latitude` FLOAT NOT NULL,
  `longtitude` FLOAT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`storytype`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`storytype` ;

CREATE TABLE IF NOT EXISTS `mydb`.`storytype` (
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`name`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`organization`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`organization` ;

CREATE TABLE IF NOT EXISTS `mydb`.`organization` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `website` VARCHAR(245) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`student` ;

CREATE TABLE IF NOT EXISTS `mydb`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `insertion` VARCHAR(45) NULL,
  `surname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`school`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`school` ;

CREATE TABLE IF NOT EXISTS `mydb`.`school` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `website` VARCHAR(245) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`study`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`study` ;

CREATE TABLE IF NOT EXISTS `mydb`.`study` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `school_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `school-study_idx` (`school_id` ASC),
  CONSTRAINT `school-study`
    FOREIGN KEY (`school_id`)
    REFERENCES `mydb`.`school` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`story`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`story` ;

CREATE TABLE IF NOT EXISTS `mydb`.`story` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  `organization_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `study_id` INT NOT NULL,
  `startdate` DATE NOT NULL,
  `enddate` DATE NOT NULL,
  `description` TEXT NOT NULL,
  `schoolyear` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idstory_UNIQUE` (`id` ASC),
  INDEX `type_idx` (`type` ASC),
  INDEX `organization-story_idx` (`organization_id` ASC),
  INDEX `student-story_idx` (`student_id` ASC),
  INDEX `study-story_idx` (`study_id` ASC),
  CONSTRAINT `storytype-story`
    FOREIGN KEY (`type`)
    REFERENCES `mydb`.`storytype` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `organization-story`
    FOREIGN KEY (`organization_id`)
    REFERENCES `mydb`.`organization` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `student-story`
    FOREIGN KEY (`student_id`)
    REFERENCES `mydb`.`student` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `study-story`
    FOREIGN KEY (`study_id`)
    REFERENCES `mydb`.`study` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`user` ;

CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`page`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`page` ;

CREATE TABLE IF NOT EXISTS `mydb`.`page` (
  `type` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`crud_operation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`crud_operation` ;

CREATE TABLE IF NOT EXISTS `mydb`.`crud_operation` (
  `type` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`acces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`acces` ;

CREATE TABLE IF NOT EXISTS `mydb`.`acces` (
  `user_id` INT NOT NULL,
  `page` VARCHAR(40) NOT NULL,
  `crud_operations` VARCHAR(6) NOT NULL,
  `item_id` INT NULL,
  `release` DATETIME NULL,
  `end` DATETIME NULL,
  PRIMARY KEY (`user_id`, `page`, `crud_operations`),
  INDEX `page_idx` (`page` ASC),
  INDEX `crud_operations_idx` (`crud_operations` ASC),
  CONSTRAINT `page-acces`
    FOREIGN KEY (`page`)
    REFERENCES `mydb`.`page` (`type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `crud_operation-acces`
    FOREIGN KEY (`crud_operations`)
    REFERENCES `mydb`.`crud_operation` (`type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `user-acces`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`link`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`link` ;

CREATE TABLE IF NOT EXISTS `mydb`.`link` (
  `story_id` INT NOT NULL,
  `link` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`link`, `story_id`),
  UNIQUE INDEX `link_UNIQUE` (`link` ASC),
  CONSTRAINT `story-link`
    FOREIGN KEY (`story_id`)
    REFERENCES `mydb`.`story` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`locationtype`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`locationtype` ;

CREATE TABLE IF NOT EXISTS `mydb`.`locationtype` (
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`name`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`storylocation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`storylocation` ;

CREATE TABLE IF NOT EXISTS `mydb`.`storylocation` (
  `story_id` INT NOT NULL,
  `location_id` INT NOT NULL,
  `location_type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`story_id`, `location_id`, `location_type`),
  INDEX `location-storylocation_idx` (`location_id` ASC),
  INDEX `locationtype-storylocation_idx` (`location_type` ASC),
  CONSTRAINT `story-storylocation`
    FOREIGN KEY (`story_id`)
    REFERENCES `mydb`.`story` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `location-storylocation`
    FOREIGN KEY (`location_id`)
    REFERENCES `mydb`.`location` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `locationtype-storylocation`
    FOREIGN KEY (`location_type`)
    REFERENCES `mydb`.`locationtype` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
