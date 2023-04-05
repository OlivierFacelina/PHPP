-- Movies List 

SELECT `title`, `description`, `release_year`, `rental_duration`, `rental_rate`, `special_features`
FROM `film`
LIMIT 15

-- Actors List
SELECT `first_name`, `last_name`, `last_update`
FROM `actor`
LIMIT 15

-- Movies List for each actor
SELECT DISTINCT `film`.`title`, `film`.`description`, `film`.`release_year`, `film`.`rental_rate`
FROM `film`
JOIN `film_actor` ON `film`.`film_id` = `film_actor`.`actor_id`
JOIN `actor` ON `film_actor`.`actor_id` = `actor`.`actor_id`

-- Store

SELECT store.store_id, staff.last_name, address.postal_code, city.city, staff.email
FROM store
JOIN staff ON store.store_id = staff.store_id
JOIN address ON store.address_id = address.address_id
JOIN city ON address.city_id = city.city_id;

-- Category

SELECT COUNT(`film_category`.`category_id`) AS 'Nombre de film par catégorie', `category`.`name`
FROM `category`
JOIN `film_category` ON `category`.`category_id` = `film_category`.`category_id`
JOIN `film` ON `film_category`.`film_id` = `film`.`film_id`
GROUP BY `film_category`.`category_id`

-- Financial data

SELECT `payment`.`staff_id`,SUM(`payment`.`amount` * `film`.`length`) AS "Chiffre d'affaires", SUM(`inventory`.`inventory_id`) AS "Nombre total de film"
FROM `payment`
JOIN `rental` ON `payment`.`rental_id` = `rental`.`rental_id`
JOIN `inventory` ON `rental`.`inventory_id` = `inventory`.`inventory_id`
JOIN `film` ON `inventory`.`film_id` = `film`.`film_id`
GROUP BY `payment`.`staff_id`