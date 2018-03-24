##Выбрать работника с id = 3
SELECT * FROM homework13 WHERE id = 3;
# Выбрать работников с зарплатой 1000$.
SELECT * FROM homework13 WHERE salary = 1000;
#Выбрать работников в возрасте 23 года.
SELECT * FROM homework13 WHERE age = 23;
# Выбрать работников с зарплатой более 400$.
SELECT * FROM homework13 WHERE salary > 400
#Выбрать работников с зарплатой равной или большей 500$
SELECT * FROM homework13 WHERE salary >= 500
#Выбрать работников с зарплатой НЕ равной 500$.
SELECT * FROM homework13 WHERE salary !=500
#Выбрать работников с зарплатой равной или меньшей 900$
SELECT * FROM homework13 WHERE salary <= 900
#Узнайте зарплату и возраст Васи.
SELECT salary,age FROM homework13 WHERE name = 'Вася'
#Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
SELECT * FROM homework13 WHERE age > 25 AND  age <= 28
#Выбрать работника Петю.
SELECT * FROM homework13 WHERE name = 'Петя'
#Выбрать работников Петю и Васю.
SELECT * FROM homework13 WHERE name = 'Петя' AND name = 'Вася'
#Выбрать всех, кроме работника Петя.
SELECT * FROM homework13 WHERE name != 'Петя'
#Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
SELECT * FROM homework13 WHERE age = 27 OR salary = 1000
#Выбрать всех работников в возрасте от 23 лет (включительно)
   до 27 лет (не включительно) или с зарплатой 1000$.
SELECT * FROM homework13 WHERE (age >= 23 AND age < 27) OR salary = 1000
#Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$
SELECT * FROM homework13 WHERE
  (age >= 23 AND age < 27) OR (salary >= 400 AND salary <= 1000)
#Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
SELECT * FROM homework13 WHERE age = 27 OR salary != 400
#Добавьте нового работника Никиту, 26 лет, зарплата 300$.
   Воспользуйтесь первым синтаксисом.
INSERT INTO homework13 SET name = 'Никита',age = 26, salary = 300
#Добавьте нового работника Светлану возрстом 20 с зарплатой 1200$.
  Воспользуйтесь вторым синтаксисом.
INSERT INTO homework13 (name, age, salary) VALUE ('Светлана',20,1200)
#Добавьте двух новых работников одним запросом: Ярослава
  с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31
INSERT INTO homework13 (name, age, salary) VALUE ('Ярослава',30,1200), ('Петро',31,1000)
#Удалите работника с id=7.
DELETE  FROM homework13 WHERE id = 7
# Удалите Колю.
DELETE  FROM homework13 WHERE name='Коля'
#Удалите всех работников, у которых возраст 23 года
DELETE  FROM homework13 WHERE age > 23
#Поставьте Васе зарплату в 200$.
UPDATE homework13 SET salary = 200 WHERE name = 'Вася'
#Работнику с id=4 поставьте возраст 35 лет.
UPDATE homework13 SET age = 35   WHERE id = 4
# Всем, у кого зарплата 500$ сделайте ее 700$.
UPDATE homework13 SET salary = 700   WHERE salary = 500
#Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
UPDATE homework13 SET age = 23  WHERE id >= 2 AND id <= 5
#Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.
UPDATE homework13 SET name = 'Женя' ,salary = 900 WHERE name = 'Вася'