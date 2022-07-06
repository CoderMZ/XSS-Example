CREATE DATABASE Guestbook;
USE Guestbook;
CREATE TABLE entries(
    id int NOT NULL,
    name varchar (50),
    message varchar (200),
    PRIMARY KEY (id)
);