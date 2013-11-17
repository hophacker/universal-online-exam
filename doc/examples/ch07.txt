chapter: Working with MySQL
==================

mysql -h hostname -u user -p

    
    
====================================

mysql> SHOW DATABASES;

    
    
====================================

+----------+
| Database |
+----------+
| mysql    |
+----------+
1 rows in set (0.00 sec)

    
    
====================================

USE mysql;

    
    
====================================

Database changed

    
    
====================================

GRANT PRIVILEGES ON DATABASE.OBJECTS TO'username'@'hostname' IDENTIFIED BY
'password';

    
    
====================================

GRANT ALL PRIVILEGES ON *.* TO 'michele'@'localhost' IDENTIFIED BY 'secret';

    
    
====================================

exit

    
    
====================================

mysql -h hostname -u username -ppassword

    
    
====================================

GRANT ALL PRIVILEGES ON store.* TO 'michele'@'localhost' IDENTIFIED BY 'secret';

    
    
====================================

CREATE DATABASE store;

    
    
====================================

Query OK, 1 row affected (0.03 sec)

    
    
====================================

USE store;

    
    
====================================

Database changed.

    
    
====================================

cd myadmin
mkdir config
chmod o+rw config
cp config.inc.php config/
chmod o+w config/config.inc.php

    
    
====================================
Example: Creating the books and authors tables
CREATE TABLE books (
title_id INT NOT NULL AUTO_INCREMENT,
title VARCHAR (150),
pages INT,
PRIMARY KEY (title_id));

CREATE TABLE authors (
author_id INT NOT NULL AUTO_INCREMENT,
title_id INT NOT NULL,
author VARCHAR (125),
PRIMARY KEY (author_id));
    
    
====================================
Example: Creating Sample Data
mysql> CREATE TABLE books (
       title_id INT NOT NULL AUTO_INCREMENT,
       title VARCHAR (150),
       pages INT,
       PRIMARY KEY (title_id));
Query OK, 0 rows affected (0.06 sec)

mysql> CREATE TABLE authors (
       author_id INT NOT NULL AUTO_INCREMENT,
       title_id INT,
       author VARCHAR (125),
       PRIMARY KEY (author_id));
Query OK, 0 rows affected (0.06 sec)

    
    
====================================

DESCRIBE books;

    
    
====================================

+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| title_id | int(11)      | NO   | PRI | NULL    | auto_increment |
| title    | varchar(150) | YES  |     | NULL    |                |
| pages    | int(11)      | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
3 rows in set (0.01 sec)

    
    
====================================

DESCRIBE authors;

    
    
====================================

+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| author_id | int(11)      | NO   | PRI | NULL    | auto_increment |
| title_id  | int(11)      | NO   |     |         |                |
| author    | varchar(125) | YES  |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
3 rows in set (0.01 sec)

    
    
====================================

INSERT INTO books VALUES (1,"Linux in a Nutshell",112);
INSERT INTO authors VALUES (NULL,1,"Ellen Siever");
INSERT INTO authors VALUES (NULL,1,"Aaron Weber");

    
    
====================================

mysql> INSERT INTO books VALUES (1,"Linux in a Nutshell",112);
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO authors VALUES (NULL,1,"Ellen Siever");
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO authors VALUES (NULL,1,"Aaron Weber");
Query OK, 1 row affected (0.00 sec)

    
    
====================================

INSERT INTO books VALUES (2,"Classic Shell Scripting",256);
INSERT INTO authors VALUES (NULL,2,"Arnold Robbins");
INSERT INTO authors VALUES (NULL,2,"Nelson Beebe");

  
    
====================================

ALTER TABLE authors MODIFY author VARCHAR(150);

    
    
====================================

ALTER TABLE authors MODIFY author varchar(125) AFTER author_id;

    
    
====================================

ALTER TABLE publications ADD time TIMESTAMP;

    
    
====================================

ALTER TABLE authors CHANGE author author_name varchar(125);

    
    
====================================

ALTER TABLE publications DROP COLUMN pages;

    
====================================

ALTER TABLE books RENAME publications;    
  
  

====================================

DROP TABLE publications;
DROP TABLE authors;

    
    
====================================

SELECT * FROM books;

    
    
====================================

+----------+-------------------------+-------+
| title_id | title                   | pages |
+----------+-------------------------+-------+
|        1 | Linux in a Nutshell     |   112 |
|        2 | Classic Shell Scripting |   256 |
+----------+-------------------------+-------+
2 rows in set (0.01 sec)

    
    
====================================

SELECT author_id, title_id, author FROM authors;

    
    
====================================

+-----------+----------+-------------------+
| author_id | title_id | author            |
+-----------+----------+-------------------+
|         1 |        1 | Ellen Siever      |
|         2 |        1 | Aaron Weber       |
|         3 |        2 | Arnold Robbins    |
|         4 |        2 | Nelson Beebe      |
+-----------+----------+-------------------+
4 rows in set (0.01 sec)

    
    
====================================

SELECT * FROM books WHERE title = "Classic Shell Scripting";

    
    
====================================

+----------+-------------------------+-------+
| title_id | title                   | pages |
+----------+-------------------------+-------+
|        2 | Classic Shell Scripting |   256 |
+----------+-------------------------+-------+
1 row in set (0.00 sec)

    
    
====================================

SELECT books.pages FROM books WHERE title = "Classic Shell Scripting";

    
    
====================================

+-------+
| pages |
+-------+
|   256 |
+-------+

1 row in set (0.00 sec)

    
    
====================================

SELECT * FROM authors ORDER BY author;

    
    
====================================

+-----------+----------+----------------+
| author_id | title_id | author         |
+-----------+----------+----------------+
|         2 |        1 | Aaron Weber    |
|         3 |        2 | Arnold Robbins |
|         1 |        1 | Ellen Siever   |
|         4 |        2 | Nelson Beebe   |
+-----------+----------+----------------+

    
    
====================================
Example: The SQL to create and populate a purchases table that links user_ids and title_ids to a purchase_id
CREATE TABLE purchases (
purchase_id int NOT NULL AUTO_INCREMENT,
user_id varchar(10) NOT NULL,
title_id int(11) NOT NULL,
purchased timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY  (purchase_id));
INSERT INTO `purchases` VALUES (1, 'mdavis', 2, '2005-11-26 17:04:29');
INSERT INTO `purchases` VALUES (2, 'mdavis', 1, '2005-11-26 17:05:58');

    
    
====================================

SELECT * FROM purchases;
+-------------+---------+----------+---------------------+
| purchase_id | user_id | title_id | purchased           |
+-------------+---------+----------+---------------------+
|           1 | mdavis  |        2 | 2005-11-26 17:04:29 |
|           2 | mdavis  |        1 | 2005-11-26 17:05:58 |
+-------------+---------+----------+---------------------+
2 rows in set (0.00 sec)

    
    
====================================

SELECT books.*, author FROM books, authors WHERE books.title_id = authors.title_id;

    
    
====================================

+----------+-------------------------+-------+-------------------+
| title_id | title                   | pages | author            |
+----------+-------------------------+-------+-------------------+
|        1 | Linux in a Nutshell     |   112 | Ellen Siever      |
|        1 | Linux in a Nutshell     |   112 | Aaron Weber       |
|        2 | Classic Shell Scripting |   256 | Arnold Robbins    |
|        2 | Classic Shell Scripting |   256 | Nelson Beebe      |
+----------+-------------------------+-------+-------------------+
4 rows in set (0.00 sec)

    
    
====================================

SELECT * FROM books NATURAL JOIN authors;

    
    
====================================

+----------+-------------------------+-------+-----------+-------------------+
| title_id | title                   | pages | author_id | author            |
+----------+-------------------------+-------+-----------+-------------------+
|        1 | Linux in a Nutshell     |   112 |         1 | Ellen Siever      |
|        1 | Linux in a Nutshell     |   112 |         2 | Aaron Weber       |
|        2 | Classic Shell Scripting |   256 |         3 | Arnold Robbins    |
|        2 | Classic Shell Scripting |   256 |         4 | Nelson Beebe      |
+----------+-------------------------+-------+-----------+-------------------+
4 rows in set (0.00 sec)

    
    
====================================

SELECT * FROM books AS b,authors AS a WHERE b.title_id = a.title_id;

    
    
====================================

+----------+-------------------------+-------+-----------+----------+----------------+
| title_id | title                   | pages | author_id | title_id | author         |
+----------+-------------------------+-------+-----------+----------+----------------+
|        1 | Linux in a Nutshell     |   112 |         1 |        1 | Ellen Siever   |
|        1 | Linux in a Nutshell     |   112 |         2 |        1 | Aaron Weber    |
|        2 | Classic Shell Scripting |   256 |         3 |        2 | Arnold Robbins |
|        2 | Classic Shell Scripting |   256 |         4 |        2 | Nelson Beebe   |
+----------+-------------------------+-------+-----------+----------+----------------+
4 rows in set (0.00 sec)

    
    
====================================

UPDATE books SET pages = 476 WHERE title = "Linux in a Nutshell";

    
    
====================================

Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

    
    
====================================

SELECT * FROM books;

    
    
====================================

+----------+-------------------------+-------+
| title_id | title                   | pages |
+----------+-------------------------+-------+
|        1 | Linux in a Nutshell     |   476 |
|        2 | Classic Shell Scripting |   256 |
+----------+-------------------------+-------+
2 rows in set (0.00 sec)

    
    
====================================

DELETE FROM books WHERE title_id = 1;

    
    
====================================

SELECT * FROM authors WHERE author LIKE "%b%";

    
    
====================================

+-----------+----------+-------------------+
| author_id | title_id | author            |
+-----------+----------+-------------------+
|         2 |        1 | Aaron Weber       |
|         3 |        2 | Arnold Robbins    |
|         4 |        2 | Nelson Beebe      |
+-----------+----------+-------------------+
3 rows in set (0.00 sec)

    
    
====================================

SELECT * FROM authors WHERE author LIKE "Aaron Webe_";

    
    
====================================

SELECT * FROM authors WHERE NOT (author = "Ellen Siever" );

    
    
====================================

SELECT *
  FROM books, authors
 WHERE title = "Linux in a Nutshell"
   AND author = "Aaron Weber"
   AND books.title_id = authors.title_id;

    
    
====================================

SELECT *
  FROM books, authors
 WHERE (author = "Aaron Weber"
    OR  author = "Ellen Siever")
   AND books.title_id=authors.title_id

    
    
==================