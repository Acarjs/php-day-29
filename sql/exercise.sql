-- Write a SQL query that would select all rows from the cities table with the string Holland at the end of the district column.

SELECT * 
FROM `cities` 
WHERE `district` //COLUMN
LIKE '%Holland'; 


--Write a SQL query that would select all rows from the cities table with the string ville anywhere within the name column.

SELECT * 
FROM `cities`
WHERE `name` //COLUMN
LIKE "%ville%"; 

--Write an SQL query to select the 10 largest cities (order by population) from the cities table that are in one of the V4 countries: Czechia, Slovakia, Poland, Hungary (their country is specified with their country_id column)
--Use IN
--The country_id values are: 56, 199, 172, 98

SELECT *
FROM `cities`
WHERE `country_id` IN (56, 199, 172, 98)
ORDER BY `population` DESC
LIMIT 10;

--UPDATE
UPDATE `regions`
SET `name` = 'Test three', `slug` = 'test-three'
WHERE `regions`.`id` = 2;

INSERT
INTO `users`
(`username`, `email`)
VALUES
('bruce', 'bruce@wayne.com');

INSERT 
INTO `regions`
(`name`,`slug`)
VALUES
('Eastern Europe', 'eastern-europe');




