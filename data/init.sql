CREATE DATABASE sessionlab;
 use sessionlab;
CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30) NOT NULL UNIQUE ,
                       password VARCHAR(30) NOT NULL,
                       date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO users (firstname, password) VALUES ( 'Philip', 'pass');