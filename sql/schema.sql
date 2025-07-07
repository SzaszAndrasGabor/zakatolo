CREATE TABLE IF NOT EXISTS `categories` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `parent_id` int DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `products` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255),
  `description` text,
  `price` decimal(10,2),
  `category_id` int,
  `featured` tinyint(1) DEFAULT 0,
  `image` varchar(255),
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
);
CREATE TABLE IF NOT EXISTS `car_types` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `product_car_types` (
    `product_id` int,
    `car_type_id` int,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`car_type_id`) REFERENCES `car_types`(`id`) ON DELETE CASCADE
);
