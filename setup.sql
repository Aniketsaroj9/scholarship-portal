CREATE DATABASE IF NOT EXISTS login_db;
USE login_db;

CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mobilno VARCHAR(20),
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS reg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    middelname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100),
    mobilno VARCHAR(20),
    country VARCHAR(50),
    cast VARCHAR(20),
    qualification VARCHAR(50),
    current VARCHAR(50),
    state VARCHAR(50),
    schol VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS chek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    schol VARCHAR(100),
    money DECIMAL(10, 2),
    cast VARCHAR(20)
);

-- Insert sample scholarship data
INSERT INTO chek (schol, money, cast) VALUES 
('Tribual Development Department', 200000, 'ST'),
('Directorate of higher education', 500000, 'OPEN'),
('Directorate of technical education', 800000, 'OBC'),
('VJNT,OBC and SBC Welfare Department', 100000, 'VJNT'),
('Social Justice and Special Assistance', 250000, 'SC');

-- Insert a test user if you want
-- INSERT INTO login (mobilno, username, password) VALUES ('1234567890', 'admin', 'admin');
