chapter: Database Best Practices
==================

mysqldump -u user -p objects_to_backup

    
    
====================================

mysqldump -u root -p store > my_backup_of_store.sql

    
    
====================================
Example: The contents of the my_backup_of_store.sql file
-- MySQL dump 10.10
--
-- Host: localhost    Database: store
-- ------------------------------------------------------
-- Server version       5.0.24a-Debian_4-log

-- Table structure for table 'authors'
--
DROP TABLE IF EXISTS 'authors';
CREATE TABLE 'authors' (
  'author_id' int(11) NOT NULL auto_increment,
'title_id' int(11) NOT NULL default '0',
  'author' varchar(125) default NULL,
  PRIMARY KEY  ('author_id')
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Dumping data for table 'authors'
--
/*!40000 ALTER TABLE 'authors' DISABLE KEYS */;
LOCK TABLES 'authors' WRITE;
INSERT INTO 'authors' VALUES (1,1,'Ellen Siever'),(2,1,'Aaron Weber'),
(3,2,'Arnold Robbins'),(4,2,'Nelson Beebe');
UNLOCK TABLES;
/*!40000 ALTER TABLE 'authors' ENABLE KEYS */;

    
    
====================================

$ mysqldump -u root -p store authors > authors.sql

    
    
====================================

$ mysqldump -u root -p --all-databases > my_backup.sql

    
    
====================================

$ mysqldump -u root -p --no-data store > structure.sql

    
    
====================================

$ mysqldump -u root -p --no-create-info store > data.sql

    
    
====================================

mysql -u root -p < my_backup.sql

    
    
====================================

mysql -u root -p -D store < my_backup.sql

    
    
====================================

mysqldump -u root -p --no-create-info --tab=/home/jon --fields-terminated-by=','
store

    
    
====================================
Example: Book titles in CSV format
1,Linux in a Nutshell,476
2,Classic Shell Scripting,256

    
    
====================================

mysqlimport -u root -p --fields-terminated-by=',' store books.txt

    
    
====================================

UNIQUE authind (author)

    
    
====================================
Example: Creating a simple index
CREATE UNIQUE INDEX authind ON authors (author);

    
    
====================================

Query OK, 4 rows affected (0.11 sec)
Records: 4  Duplicates: 0  Warnings: 0

    
    
====================================

DESCRIBE authors;

    
    
====================================

+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| author_id | int(11)      | NO   | PRI | NULL    | auto_increment |
| title_id  | int(11)      | NO   |     | 0       |                |
| author    | varchar(125) | YES  | UNI | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

    
    
====================================

SELECT * FROM authors WHERE author = 'Arnold Robbins';

    
    
====================================

+-----------+----------+----------------+
| author_id | title_id | author         |
+-----------+----------+----------------+
|         3 |        2 | Arnold Robbins |
+-----------+----------+----------------+
1 row in set (0.00 sec)

    
    
====================================

EXPLAIN SELECT * FROM authors WHERE author = 'Arnold Robbins';

    
    
====================================

+----+-------------+---------+------+---------------+------+---------+------+---
---+-------------+
| id | select_type | table   | type | possible_keys | key  | key_len | ref  |
rows | Extra       |
+----+-------------+---------+------+---------------+------+---------+------+---
---+-------------+
|  1 | SIMPLE      | authors | ALL  | NULL          | NULL |    NULL | NULL |
 4 | Using where |
+----+-------------+---------+------+---------------+------+---------+------+---
---+-------------+
1 row in set (0.00 sec)

    
    
====================================

+----+-------------+---------+-------+---------------+---------+---------+------
-+------+-------+
| id | select_type | table   | type  | possible_keys | key     | key_len
| ref | rows | Extra |
+----+-------------+---------+-------+---------------+---------+---------+------
-+------+-------+
|  1 | SIMPLE      | authors | const | authind       | authind |     126 | const
 |    1 |       |
+----+-------------+---------+-------+---------------+---------+---------+------
-+------+-------+
1 row in set (0.12 sec)

    
    
====================================

SELECT fields FROM left_table LEFT JOIN right_table ON
left_table.field_id = right_table.field_id;

    
    
====================================

SELECT * FROM users LEFT JOIN purchases ON users.user_id =
purchases.user_id;

    
    
====================================

CREATE TABLE users (
  user_id int(11) NOT NULL auto_increment,
  first_name varchar(100) default NULL,
  last_name varchar(100) default NULL,
  username varchar(45) default NULL,
  password varchar(32) default NULL,
  PRIMARY KEY  (user_id)
);

INSERT INTO users VALUES (1,'Michele','Davis','mdavis',NULL),(2,'Jon','Phillips','jphillips',NULL);

    
    
====================================

  SELECT title,COUNT(author_id)
    FROM books NATURAL JOIN authors
GROUP BY title;

    
    
====================================

+-------------------------+------------------+
| title                   | COUNT(author_id) |
+-------------------------+------------------+
| Classic Shell Scripting |                2 |
| Linux in a Nutshell     |                2 |
+-------------------------+------------------+
2 rows in set (0.05 sec)

    
    
====================================
Example: Using CONCAT to put fields together
SELECT CONCAT(title,' has ',pages,' pages.') FROM books;

    
    
====================================

+----------------------------------------+
| concat(title,' has ',pages,' pages.')  |
+----------------------------------------+
| Linux in a Nutshell has 476 pages.     |
| Classic Shell Scripting has 256 pages. |
+----------------------------------------+
2 rows in set (0.02 sec)

    
    
====================================

SELECT CONCAT_WS(',',author_id,title_id,author) FROM authors;

    
    
====================================

+------------------------------------------+
| CONCAT_WS(',',author_id,title_id,author) |
+------------------------------------------+
| 1,1,Ellen Siever                         |
| 2,1,Aaron Weber                          |
| 3,2,Arnold Robbins                       |
| 4,2,Nelson Beebe                         |
+------------------------------------------+
4 rows in set (0.01 sec)

    
    
====================================
Example: Calculating the length of a string
SELECT CONCAT(title,' has ',LENGTH(title), ' characters.') FROM books;

    
    
====================================

+-----------------------------------------------------+
| CONCAT(title,' has ',LENGTH(title), ' characters.') |
+-----------------------------------------------------+
| Linux in a Nutshell has 19 characters.              |
| Classic Shell Scripting has 23 characters.          |
+-----------------------------------------------------+
2 rows in set (0.02 sec)

    
    
====================================
Example: Changing the case of the title
SELECT UCASE(title), LCASE(title) from books;

    
    
====================================

+-------------------------+-------------------------+
| UCASE(title)            | LCASE(title)            |
+-------------------------+-------------------------+
| LINUX IN A NUTSHELL     | linux in a nutshell     |
| CLASSIC SHELL SCRIPTING | classic shell scripting |
+-------------------------+-------------------------+
2 rows in set (0.03 sec)

    
    
====================================

SELECT LPAD(title,30,'.') FROM books;

    
    
====================================

+--------------------------------+
| LPAD(title,30,'.')             |
+--------------------------------+
| ...........Linux in a Nutshell |
| .......Classic Shell Scripting |
+--------------------------------+
2 rows in set (0.00 sec)

    
    
====================================

TRIM(LEADING FROM string);

    
    
====================================

TRIM(TRAILING FROM string);

    
    
====================================
Example: Using the LEADING option to remove zeros
SELECT TRIM(LEADING '0' from '0000Example00000');

    
    
====================================

+-------------------------------------------+
| TRIM(LEADING '0' from '0000Example00000') |
+-------------------------------------------+
| Example00000                              |
+-------------------------------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using TRIM with the TRAILING option
SELECT TRIM(TRAILING '0' from '0000Example00000');

    
    
====================================

+--------------------------------------------+
| TRIM(TRAILING '0' from '0000Example00000') |
+--------------------------------------------+
| 0000Example                                |
+--------------------------------------------+
1 row in set (0.01 sec)

    
    
====================================
Example: Looking for the string in our author names
SELECT author, LOCATE('on',author) FROM authors;

    
    
====================================

+-------------------+---------------------+
| author            | LOCATE(on',author)|
+-------------------+---------------------+
| Aaron Weber       |                   4 |
| Arnold Robbins    |                   0 |
| Ellen Siever      |                   0 |
| Nelson  Beebe     |                   5 |
+-------------------+---------------------+
4 rows in set (0.01 sec)

    
    
====================================
Example: Adding the formatting to a phone number using LEFT, RIGHT, and SUBSTR
SELECT CONCAT(
                  '(',
                  LEFT('6128238193',3),
                  ')',
                  SUBSTR('6128238193',4,3),
                  '-',
                  RIGHT('6128238193', 4)
             );

    
    
====================================

+-------------------------------------------------------------------------------
-----------+
| CONCAT('(',LEFT('6128238193',3),')',SUBSTR('6128238193',4,3),'-',RIGHT('612823
8193', 4)) |
+-------------------------------------------------------------------------------
-----------+
| (612)823-8193
           |
+-------------------------------------------------------------------------------
-----------+
1 row in set (0.02 sec)

    
    
====================================

SELECT REPLACE('2323 Fulerton Avenue', 'Avenue', 'Ave.');

    
    
====================================

+---------------------------------------------------+
| REPLACE('2323 Fulerton Avenue', 'Avenue', 'Ave.') |
+---------------------------------------------------+
| 2323 Fulerton Ave.                                |
+---------------------------------------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using WEEKDAY to get the day of the week
SELECT WEEKDAY('1964-10-12');

    
    
====================================

+-----------------------+
| WEEKDAY('1964-10-12') |
+-----------------------+
|                     0 |
+-----------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using DAYNAME to get the day of the week as a name
SELECT DAYNAME('1964-10-12');

    
    
====================================

+-----------------------+
| DAYNAME('1964-10-12') |
+-----------------------+
| Monday                |
+-----------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Finding days since the start of the year
SELECT DAYOFYEAR('2006-1-1'),
       DAYOFYEAR('2006-12-24');

    
    
====================================

+-----------------------+-------------------------+
| DAYOFYEAR('2006-1-1') | DAYOFYEAR('2006-12-24') |
+-----------------------+-------------------------+
|                     1 |                     358 |
+-----------------------+-------------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using MONTH and MONTHNAME on the purchases table
SELECT purchased,MONTH(purchased),MONTHNAME(purchased) FROM purchases;

    
    
====================================

+---------------------+------------------+----------------------+
| purchased           | MONTH(purchased) | MONTHNAME(purchased) |
+---------------------+------------------+----------------------+
| 2007-11-26 17:04:29 |               11 | November             |
| 2007-11-26 17:05:58 |               11 | November             |
+---------------------+------------------+----------------------+
2 rows in set (0.02 sec)

    
    
====================================

SELECT WEEK('2006-12-24');

    
    
====================================

+--------------------+
| WEEK('2006-12-24') |
+--------------------+
|                 52 |
+--------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using HOUR and MINUTE on a time
SELECT CONCAT_WS(':',hour('4:46:45'),MINUTE('4:46:45'));

    
    
====================================

+--------------------------------------------------+
| CONCAT_WS(':',hour('4:46:45'),MINUTE('4:46:45')) |
+--------------------------------------------------+
| 4:46                                             |
+--------------------------------------------------+

    
    
====================================

DATE_ADD(date,INTERVAL expression type)
DATE_SUB(date,INTERVAL expression type)

    
    
====================================
Example: Using DATE_SUB to subtract days
SELECT DATE_SUB(NOW(  ), INTERVAL 12 DAY);

    
    
====================================

+----------------------------------+
| date_sub(NOW(), INTERVAL 12 day) |
+----------------------------------+
| 2007-11-03 04:27:09              |
+----------------------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using the minus operator on a date
SELECT NOW() - INTERVAL 12 DAY;

    
    
====================================

+-------------------------+
| NOW() - INTERVAL 12 DAY |
+-------------------------+
| 2007-11-03 04:32:30     |
+-------------------------+
1 row in set (0.01 sec)

    
    
====================================

SELECT CURDATE();

    
    
====================================

+------------+
| CURDATE()  |
+------------+
| 2007-11-15 |
+------------+
1 row in set (0.00 sec)

    
    
====================================

SELECT CURTIME();

    
    
====================================

+-----------+
| CURTIME() |
+-----------+
| 04:44:50  |
+-----------+
1 row in set (0.00 sec)

    
    
====================================

SELECT SYSDATE();

    
    
====================================

+---------------------+
| SYSDATE()           |
+---------------------+
| 2007-11-15 04:45:14 |
+---------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: Using DATE_FORMAT with a string to place colons between the segments
SELECT DATE_FORMAT('2006-12-24 09:09:23', '%h:%i:%s');

    
    
====================================

+------------------------------------------------+
| DATE_FORMAT('2006-12-24 09:09:23', '%h:%i:%s') |
+------------------------------------------------+
| 09:09:23                                       |
+------------------------------------------------+
1 row in set (0.01 sec)

    
    
====================================

SELECT NOW(), UNIX_TIMESTAMP(NOW());

    
    
====================================

+---------------------+-----------------------+
| NOW()               | UNIX_TIMESTAMP(NOW()) |
+---------------------+-----------------------+
| 2007-03-20 19:00:46 |            1174435246 |
+---------------------+-----------------------+
1 row in set (0.03 sec)

    
    
====================================
Example: Using a transaction
CREATE TABLE 'books_innodb' (
  'title_id' int(11) NOT NULL auto_increment,
  'title' varchar(150) default NULL,
  'pages' int(11) default NULL,
  PRIMARY KEY  ('title_id')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO 'books_innodb' ('title_id', 'title', 'pages') VALUES
(1, 'Linux in a Nutshell', 476),
(2, 'Classic Shell Scripting', 558);

start transaction;
delete from books_innodb where title_id = 1;
delete from books_innodb where title_id = 2;
rollback;

    
    
====================================

SELECT * FROM books_innodb WHERE (title_id = 1 OR title_id = 2);

    
    
====================================

+----------+-------------------------+-------+
| title_id | title                   | pages |
+----------+-------------------------+-------+
|        1 | Linux in a Nutshell     |   476 |
|        2 | Classic Shell Scripting |   558 |
+----------+-------------------------+-------+
2 rows in set (0.05 sec)

    
    
==================