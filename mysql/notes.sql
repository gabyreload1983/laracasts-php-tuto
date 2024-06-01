CREATE TABLE `php-tuto`.`notes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `body` VARCHAR(255) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_notes_1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_notes_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `php-tuto`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
