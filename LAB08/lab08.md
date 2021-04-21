*******Lab 8*******

> Starting MySQL

C:\xampp\mysql\bin>mysql -u root -p
> Creating Database

MariaDB [(none)]> CREATE database gces;
> Changing Active Database

MariaDB [(none)]> USE gces;
> Show Database List

MariaDB [gces]> show databases;
> Create Table

MariaDB [gces]> CREATE TABLE student(
    -> id int UNIQUE AUTO_INCREMENT,
    -> name varchar(100),
    -> address varchar(100),
    -> phone_number int UNIQUE,
    -> bio text
    -> );
> Insert Single Data

MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) 
VALUES ("abc","address",9816187542,"hey");
> Insert Multiple Data

MariaDB [gces]> INSERT INTO student 
(`name`,`address`,`phone_number`,`bio`) VALUES 
("abhishek","hemja",9845232211,"i am abhishek."),
("sagun","batulechaur",846545654,"i am sagun."),
("pramod","new road",986546854,"i am pramod"),
("sundar","lekhnath",9848645321,"i am sundar");
> Rename Table

MariaDB [gces]> ALTER TABLE student
    -> RENAME TO students;
> Add Column

MariaDB [gces]> ALTER TABLE students
    -> ADD (user_id int);
> Update Record

MariaDB [gces]> UPDATE students
    -> SET user_id = 34
    -> WHERE id = 56;
> Select Record

MariaDB [gces]> SELECT * FROM students WHERE name = "abhishek";
MariaDB [gces]> SELECT * FROM students WHERE name LIKE "a%";
> Update Record

MariaDB [gces]> UPDATE students
    -> SET address = "nadipur"
    -> WHERE id = 12
    -> ;
> Delete Record

MariaDB [gces]> DELETE FROM students WHERE id = 10;
