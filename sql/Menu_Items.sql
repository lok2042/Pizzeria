DROP TABLE IF EXISTS `menu_item_category`;
CREATE TABLE `menu_item_category` ( 
	`category_id` INT NOT NULL AUTO_INCREMENT , 
	`category_name` VARCHAR(20) NOT NULL , 
	`price` DOUBLE NOT NULL , 
	CONSTRAINT categoryPK
	PRIMARY KEY (`category_id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `menu_item`;
CREATE TABLE `menu_item` ( 
	`menu_item_id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(50) NOT NULL , 
	`description` TEXT NOT NULL , 
	`category_id` INT NOT NULL , 
	`image` VARCHAR(30) NOT NULL , 
	CONSTRAINT menuItemPK
	PRIMARY KEY (`menu_item_id`),
	CONSTRAINT categoryFK
	FOREIGN KEY (`category_id`) 
	REFERENCES `menu_item_category` (`category_id`) 
	ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;


-- Menu Item Category

INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Classic Pizza', '29.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Premium Pizza', '29.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Pasta', '19.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Sides', '12.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Salad', '9.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Dessert', '9.99');
INSERT INTO `menu_item_category` (`category_name`, `price`) VALUES ('Drink', '3.99');

-- Classic Pizza

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Classic Beef Pepperoni', 'Beef Pepperoni baked with Cheddar and Mozzarella.', '1', 'beef_peperoni.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Classic Margherita', 'Italian Marinara Sauce and Mozzarella sprinkled with Basil.', '1','margherita.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('BBQ Chicken Classico', 'BBQ marinated Diced Chicken and Fresh Onions with Mozzarella and Cheddar Cheese.', '1', 'bbq_chicken.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Chicken Pepperoni', 'Chicken Pepperoni and Mozzarella.', '1', 'chicken_peperoni.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Chicken Hawaii', 'Pineapple and Chicken Rashers baked with Cheddar and Mozzarella.', '1', 'chicken_hawaii.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Classic Chicken and Cheese', 'Diced Chicken and Mozarella Cheese.', '1', 'chicken_and_cheese.png');


-- Premium Pizza

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Seafood Marinara Supreme', 'Fresh Prawns, Crab Meat, Pineapple and Onion baked with Cheddar and Mozzarella.','2', 'seafood_marinara.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('BBQ Meat-Eaters', 'Beef Pepperoni, Grounded Beef, Sausage, Mozzarella & Cheddar cheese on BBQ base sauce.', '2', 'bbq_meat_eater.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('New York Mac & Cheese Pizza', 'Creamy Alfredo Mac and Cheese baked with Cheddar and Mozzarella on our scrumptious pizza base.', '2', 'ny_mac_and_cheese.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('El Diablo', 'Chicken Pepperoni, Mushrooms, Green Chilies baked with Mozzarella & Cheddar and Hot Sauce swirl', '2', 'el_diablo.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Mushroom Alfredo with Blue Cheese', 'Creamy Alfredo pizza base topped with Green Peppers, Olives, Onions, Mushrooms and Tomatoes topped with Mozzarella, Cheddar and Blue Cheese!', '2', 'mushroom_alfredo.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Spicy Italiano', 'Chicken Pepperoni and Sausage on Spicy Italian base sauce and baked with Cheddar and Mozzarella.', '2', 'spicy_italiano.png');


-- Pastas

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Spaghetti Bolognese (Chicken/Beef)', 'Delicious Chicken/Beef Bolognese topped with parmesan and herbs.', '3', 'bolognese.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Creamy Mushroom Carbonara', 'Rich, creamy and specially prepared pasta topped with sliced mushrooms and cheese. A savour delight', '3', 'carbonara.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Prawn Marinara Pasta', 'Pasta tossed in olive oil, herbs , smoked prawns and our signature marinara', '3', 'marinara.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Creamy Tuscan Shrimp Pasta', 'Rich, creamy and specially prepared pasta topped with locally sourced fresh shrimps and parmesan cheese.', '3', 'tuscan_shrimp.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Lasagna (Chicken/Beef)', 'Ultimate comfort food, cheesy and creamy layers of pasta baked with chicken/beef and cheese.', '3', 'lasagna.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('NYC Cheesy Mac & Cheese', 'Cheesy Mac and Cheese baked to perfection with Chicken Rashers, New York style.', '3', 'mac_and_cheese.png');


-- Sides

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Creamy Mushroom Soup', 'Chef-Made using fresh cream, butter, finely chopped mushrooms & onions', '4', 'mushroom_soup.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Loaded Cheesy Nachos', 'Tortilla chips layered with Jalapeno, Tomato, Onions with melted Mozzarella & Cheddar.', '4', 'nachos.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Pop-Corn Chicken & Fries', 'Hand-breaded Chicken pieces & Crispy fries served with our chef made marinara sauce.', '4', 'popcorn_chicken.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Crispy Calamari Rings', 'Crispy calamari rings served with our famous marinara sauce. (6 pieces per portion)', '4', 'calamari.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Honey BBQ Wings', 'Hand breaded crispy wings tossed with delicious hickory honey BBQ sauce. Sweet and tangy', '4', 'bbq_wings.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Chicken Strips & Fries', 'Hand-breaded Chicken Strips & Crispy Fries served with our chef made marinara sauce.', '4', 'strips_and_fries.png');


-- Salad

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Chicken Caesar Salad', 'Fresh Rommaine Lettuce, Olives, Tomatoes, Onions, Green Peppers, Jalapeno topped with fresh diced chicken and Caesar dressing.', '5', 'ceasar_salad.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Piri Piri Chicken Salad', 'Fresh Romaine Lettuce, Olives, Tomatoes, Onions & Green Peppers topped with spicy Homemade Piri Piri flavoured diced chicken and Caesar dressing, sprinkled with Croutons.', '5', 'piri_piri.png');


-- Dessert

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Cinnamon Stix', 'Utterly cinnamon-sugar coated heaven! Served with homemade Cinnabon\'s rich cream cheese frosting. It doesn\'t get much better than that!', '6', 'cinnamon_stix.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Apple Pie', 'The perfect blend of New Zealand Gala Apples with a touch of Cinnamon baked until golden brown freshly in our kitchen everyday.', '6', 'apple_pie.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Ferrero Chocolate Pizza', 'Rich chocolate sauce topped with Almonds on a pizza base', '6', 'choco_ferrero_pizza.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Chocolate Banana Pizza Dessert', 'Delicious pizza dessert rich with Belgian chocolate and fresh banana.', '6', 'choco_banana_pizza.png');


-- Drinks

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Coke', 'Add a zing to your meal', '7', 'coke.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Sprite', 'Add a zing to your meal', '7', 'sprite.png');

INSERT INTO menu_item(`name`, `description`, `category_id`, `image`)
VALUES ('Plain Water', 'Add a zing to your meal', '7', 'plain.png');

