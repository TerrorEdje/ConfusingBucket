SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `db_develop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `db_develop` ;

-- -----------------------------------------------------
-- Table `db_develop`.`organization_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`organization_type` (
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`name`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`location`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`location` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `country` VARCHAR(100) NOT NULL ,
  `city` VARCHAR(100) NOT NULL ,
  `streetname` VARCHAR(100) NULL ,
  `number` VARCHAR(10) NULL ,
  `zipcode` VARCHAR(10) NULL ,
  `latitude` FLOAT NOT NULL ,
  `longitude` FLOAT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`organization`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`organization` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `description` TEXT NOT NULL ,
  `location_id` INT NOT NULL ,
  `website` VARCHAR(245) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `type-organization_idx` (`type` ASC) ,
  CONSTRAINT `type-organization`
    FOREIGN KEY (`type` )
    REFERENCES `db_develop`.`organization_type` (`name` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `location-organization`
    FOREIGN KEY (`location_id` )
    REFERENCES `db_develop`.`location` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`activity_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`activity_type` (
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`name`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`activity_status`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`activity_status` (
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`name`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`school`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`school` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `website` VARCHAR(245) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`study`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`study` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  `school_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `school-study_idx` (`school_id` ASC) ,
  CONSTRAINT `school-study`
    FOREIGN KEY (`school_id` )
    REFERENCES `db_develop`.`school` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`activity`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`activity` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `description` TEXT NOT NULL ,
  `startdate` DATE NULL ,
  `enddate` DATE NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `organization_id` INT NOT NULL ,
  `study_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `type-activity_idx` (`type` ASC) ,
  INDEX `status-activity_idx` (`status` ASC) ,
  INDEX `study-activity_idx` (`study_id` ASC) ,
  CONSTRAINT `type-activity`
    FOREIGN KEY (`type` )
    REFERENCES `db_develop`.`activity_type` (`name` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `status-activity`
    FOREIGN KEY (`status` )
    REFERENCES `db_develop`.`activity_status` (`name` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `organization-activity`
    FOREIGN KEY (`organization_id` )
    REFERENCES `db_develop`.`organization` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `study-activity`
    FOREIGN KEY (`study_id` )
    REFERENCES `db_develop`.`study` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NOT NULL ,
  `insertion` VARCHAR(45) NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(128) NULL ,
  `study_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `study-student_idx` (`study_id` ASC) ,
  CONSTRAINT `study-student`
    FOREIGN KEY (`study_id` )
    REFERENCES `db_develop`.`study` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`experience`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`experience` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `activity_id` INT NOT NULL ,
  `description` TEXT NOT NULL ,
  `cijfer` DECIMAL NULL ,
  `accepted` TINYINT(1) NOT NULL DEFAULT false ,
  `student_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `activity-experience_idx` (`activity_id` ASC) ,
  INDEX `student-experience_idx` (`student_id` ASC) ,
  CONSTRAINT `activity-experience`
    FOREIGN KEY (`activity_id` )
    REFERENCES `db_develop`.`activity` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `student-experience`
    FOREIGN KEY (`student_id` )
    REFERENCES `db_develop`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`link`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`link` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `experience_id` INT NOT NULL ,
  `link` VARCHAR(245) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `experience-link_idx` (`experience_id` ASC) ,
  CONSTRAINT `experience-link`
    FOREIGN KEY (`experience_id` )
    REFERENCES `db_develop`.`experience` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`image`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`image` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `thumbnail_url` VARCHAR(245) NOT NULL ,
  `url` VARCHAR(245) NOT NULL ,
  `experience_id` INT NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `experience-images_idx` (`experience_id` ASC) ,
  CONSTRAINT `experience-image`
    FOREIGN KEY (`experience_id` )
    REFERENCES `db_develop`.`experience` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `google_token` VARCHAR(100) NULL ,
  `google_value` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`usertype`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`usertype` (
  `user_id` INT NOT NULL ,
  `student_id` INT NULL ,
  `organization_id` INT NULL ,
  PRIMARY KEY (`user_id`) ,
  INDEX `user-usertype_idx` (`user_id` ASC) ,
  INDEX `student-usertype_idx` (`student_id` ASC) ,
  INDEX `organization-usertype_idx` (`organization_id` ASC) ,
  CONSTRAINT `user-usertype`
    FOREIGN KEY (`user_id` )
    REFERENCES `db_develop`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `student-usertype`
    FOREIGN KEY (`student_id` )
    REFERENCES `db_develop`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `organization-usertype`
    FOREIGN KEY (`organization_id` )
    REFERENCES `db_develop`.`organization` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`page`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`page` (
  `type` VARCHAR(40) NOT NULL ,
  PRIMARY KEY (`type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`crud_operation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`crud_operation` (
  `type` VARCHAR(6) NOT NULL ,
  PRIMARY KEY (`type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`accesss`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`accesss` (
  `user_id` INT NOT NULL ,
  `page` VARCHAR(40) NOT NULL ,
  `crud_operations` VARCHAR(6) NOT NULL ,
  `item_id` INT NULL ,
  `release` VARCHAR(45) NULL ,
  `end` VARCHAR(45) NULL ,
  `accessscol` VARCHAR(45) NULL ,
  PRIMARY KEY (`user_id`, `page`, `crud_operations`) ,
  INDEX `page_idx` (`page` ASC) ,
  INDEX `crud_operation-accesss_idx` (`crud_operations` ASC) ,
  INDEX `user-accesss_idx` (`user_id` ASC) ,
  CONSTRAINT `page-accesss`
    FOREIGN KEY (`page` )
    REFERENCES `db_develop`.`page` (`type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `crud_operation-accesss`
    FOREIGN KEY (`crud_operations` )
    REFERENCES `db_develop`.`crud_operation` (`type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `user-accesss`
    FOREIGN KEY (`user_id` )
    REFERENCES `db_develop`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_develop`.`login_log`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_develop`.`login_log` (
  `datetime` DATETIME NOT NULL ,
  `gebruiker` VARCHAR(45) NOT NULL ,
  `token` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`datetime`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
