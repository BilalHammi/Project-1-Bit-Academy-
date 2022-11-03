CREATE DATABASE passwordmanager;

USE `passwordmanager`;

CREATE TABLE `wachtwoorden` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100),
    title VARCHAR(100),
    username varchar(100),
    password varchar(100)
);

CREATE TABLE `users` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);
