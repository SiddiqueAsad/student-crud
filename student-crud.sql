CREATE DATABASE student_crud;
USE student_crud;
CREATE TABLE students(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
    email VARCHAR(50),
    course VARCHAR(50),
    acedemic_year VARCHAR(50),
    phone_num VARCHAR(50),
    photo VARCHAR(255)
);

