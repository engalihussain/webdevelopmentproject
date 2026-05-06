CREATE DATABASE IF NOT EXISTS restaurant_menu CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE restaurant_menu;

CREATE TABLE IF NOT EXISTS menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

INSERT INTO menu_items (name, price) VALUES 
('شاورما دجاج', 15.00),
('برجر لحم', 25.00),
('بيتزا مارغريتا', 35.00),
('كبسة دجاج', 40.00),
('شيش طاووق', 20.00),
('عصير برتقال طازج', 10.00),
('سلطة فتوش', 12.00),
('كنافة بالجبن', 20.00);
