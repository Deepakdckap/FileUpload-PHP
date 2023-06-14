CREATE DATABASE fileUpload; 

use fileUpload;

CREATE TABLE uploadFiles(
	id int NOT null AUTO_INCREMENT PRIMARY KEY,
    username varchar(200),
    files varchar(255),
    created_at timestamp,
    updated_at timestamp
);