SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`organisatie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`organisatie` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`organisatie` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `naam` VARCHAR(45) NOT NULL ,
  `omschrijving` VARCHAR(45) NULL ,
  `website` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`opleiding`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`opleiding` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`opleiding` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `naam` VARCHAR(45) NOT NULL ,
  `omschrijving` VARCHAR(45) NULL ,
  `organisatie_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `organisatie_organisatie_id_idx` (`organisatie_id` ASC) ,
  CONSTRAINT `organisatie_organisatie_id`
    FOREIGN KEY (`organisatie_id` )
    REFERENCES `mydb`.`organisatie` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`gebruiker`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`gebruiker` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`gebruiker` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `gebruikersnaam` VARCHAR(45) NOT NULL ,
  `wachtwoord` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `gebruikersnaam_UNIQUE` (`gebruikersnaam` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`student` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `voornaam` VARCHAR(45) NULL ,
  `tussenvoegsel` VARCHAR(45) NULL ,
  `achternaam` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `gebruiker_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_student_gebruiker1_idx` (`gebruiker_id` ASC) ,
  CONSTRAINT `fk_student_gebruiker1`
    FOREIGN KEY (`gebruiker_id` )
    REFERENCES `mydb`.`gebruiker` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`locatie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`locatie` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`locatie` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `land` VARCHAR(45) NOT NULL ,
  `plaats` VARCHAR(45) NOT NULL ,
  `straatnaam` VARCHAR(45) NULL ,
  `huisnummer` VARCHAR(45) NULL ,
  `postcode` VARCHAR(45) NULL ,
  `organisatie_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_locatie_organisatie1_idx` (`organisatie_id` ASC) ,
  CONSTRAINT `fk_locatie_organisatie1`
    FOREIGN KEY (`organisatie_id` )
    REFERENCES `mydb`.`organisatie` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`type` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`type` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `naam` VARCHAR(45) NOT NULL ,
  `omschrijving` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`story`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`story` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`story` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `organisatie_id` INT NOT NULL ,
  `type_id` INT NOT NULL ,
  `begin_datum` DATE NOT NULL ,
  `eind_datum` DATE NOT NULL ,
  `beschrijving` VARCHAR(45) NOT NULL ,
  `link` VARCHAR(45) NULL ,
  `leerjaar` INT NULL ,
  INDEX `organisatie_organisatie_id_idx` (`organisatie_id` ASC) ,
  INDEX `type_type_id_idx` (`type_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `organisatie_organisatie_id`
    FOREIGN KEY (`organisatie_id` )
    REFERENCES `mydb`.`organisatie` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `type_type_id`
    FOREIGN KEY (`type_id` )
    REFERENCES `mydb`.`type` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`opleiding_has_student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`opleiding_has_student` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`opleiding_has_student` (
  `opleiding_id` INT NOT NULL ,
  `student_id` INT NOT NULL ,
  `story_id` INT NOT NULL ,
  PRIMARY KEY (`opleiding_id`, `student_id`, `story_id`) ,
  INDEX `fk_opleiding_has_student_student1_idx` (`student_id` ASC) ,
  INDEX `fk_opleiding_has_student_opleiding1_idx` (`opleiding_id` ASC) ,
  INDEX `fk_opleiding_has_student_story1_idx` (`story_id` ASC) ,
  CONSTRAINT `fk_opleiding_has_student_opleiding1`
    FOREIGN KEY (`opleiding_id` )
    REFERENCES `mydb`.`opleiding` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_opleiding_has_student_student1`
    FOREIGN KEY (`student_id` )
    REFERENCES `mydb`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_opleiding_has_student_story1`
    FOREIGN KEY (`story_id` )
    REFERENCES `mydb`.`story` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rechten`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`rechten` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`rechten` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `omschrijving` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`gebruiker_has_rechten`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`gebruiker_has_rechten` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`gebruiker_has_rechten` (
  `gebruiker_gebruikersnaam` VARCHAR(45) NOT NULL ,
  `rechten_id` INT NOT NULL ,
  PRIMARY KEY (`gebruiker_gebruikersnaam`, `rechten_id`) ,
  INDEX `fk_gebruiker_has_rechten_rechten1_idx` (`rechten_id` ASC) ,
  INDEX `fk_gebruiker_has_rechten_gebruiker1_idx` (`gebruiker_gebruikersnaam` ASC) ,
  CONSTRAINT `fk_gebruiker_has_rechten_gebruiker1`
    FOREIGN KEY (`gebruiker_gebruikersnaam` )
    REFERENCES `mydb`.`gebruiker` (`gebruikersnaam` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_gebruiker_has_rechten_rechten1`
    FOREIGN KEY (`rechten_id` )
    REFERENCES `mydb`.`rechten` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
