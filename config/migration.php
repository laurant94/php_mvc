<?php
$statements = [
  'CREATE TABLE IF NOT EXISTS posts(
    id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(200) NOT NULL,
    description TEXT,
    price FLOAT NOT NULL DEFAULT 0,
    sku varchar(200),
    image TEXT
  );',
  'CREATE TABLE IF NOT EXISTS users(
    id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
  )
  '
];