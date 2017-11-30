
Creating a table:
CREATE TABLE `a_database`.`users` ( `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Primary Key' , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `website` VARCHAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


Inserting data in to table:
INSERT INTO `a_database`.`users` (`id`, `username`, `password`, `website`) VALUES (NULL, 'Avinash', 'avi123', 'avinash@avicorp.com'), (NULL, 'Pandu', 'pandu123', 'pandu@avicorp.com'), (NULL, 'Shobha', 'shobha123', 'shobha@avicorp.com'), (NULL, 'Shruti', 'shruti123', 'shruti@avicorp.com'), (NULL, 'ayyappa', 'ayyappa123', 'ayyappa@ayyappacorp.com')


Adding columns to a table:
ALTER TABLE `users` ADD `firstname` VARCHAR(40) NOT NULL AFTER `email`, ADD `lastname` VARCHAR(40) NOT NULL AFTER `firstname`;

Updating data to added columns:
UPDATE `a_database`.`users` SET `firstname` = 'Avinash', `lastname` = 'Erupaka' WHERE `users`.`id` = 1; UPDATE `a_database`.`users` SET `firstname` = 'Pandu', `lastname` = 'Erupaka' WHERE `users`.`id` = 2; UPDATE `a_database`.`users` SET `firstname` = 'Shobha', `lastname` = 'Erupaka' WHERE `users`.`id` = 3; UPDATE `a_database`.`users` SET `firstname` = 'Shruti', `lastname` = 'Madadi' WHERE `users`.`id` = 4; UPDATE `a_database`.`users` SET `firstname` = 'Ayyappa', `lastname` = 'HariHara' WHERE `users`.`id` = 5;


CREATE TABLE `a_database`.`foods` ( `id` INT NOT NULL AUTO_INCREMENT , `food_name` VARCHAR(40) NOT NULL , `calories` INT NOT NULL , `healthy` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `foods` CHANGE `healthy` `healthy(h)_unhealthy(u)` VARCHAR(1) NOT NULL;

INSERT INTO `a_database`.`foods` (`id`, `food_name`, `calories`, `healthy(h)_unhealthy(u)`) VALUES (NULL, 'Pizza', '10000', 'u'), (NULL, 'Salad', '200', 'h');