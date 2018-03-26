# Выбрать Id заказа и соответствующих пользователей из таблицы users,
  у которых записи в таблице orders имеют status = 0;

SELECT o.id,o.status,u.name  AS user_name
  FROM users u
inner JOIN orders o ON o.status = 0 AND u.id = o.user_id
#Выбрать пользователей у которых есть невыполненные заказы, status = 0;
SELECT u.name  AS user_name
  FROM users u
inner JOIN orders o ON o.status = 0 AND u.id = o.user_id
#Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы users,
у которых 3 и больше записей поля 'status' = '1' в таблице orders
SELECT u.name,o.user_id,sum(o.status) AS col_orders
FROM users u
JOIN orders o ON u.id = o.user_id
GROUP BY u.name,o.user_id
HAVING sum(o.status) >= 3