use josnel;

CREATE  TABLE IF NOT EXISTS `users` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `cod_user` CHAR(16) NOT NULL ,
  `name` VARCHAR(65) NOT NULL ,
  `email` VARCHAR(85) NOT NULL ,
  `password` CHAR(32) NOT NULL ,
  PRIMARY KEY (`user_id`) ,
  UNIQUE INDEX `cod_user_UNIQUE` (`cod_user` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;