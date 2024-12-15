-- Chọn cơ sở dữ liệu
USE datab;

-- Tạo bảng users (nếu chưa có)
CREATE TABLE IF NOT EXISTS users (
  id int NOT NULL AUTO_INCREMENT,
  full_name varchar(100) NOT NULL,
  email varchar(100) NOT NULL UNIQUE,
  username varchar(100) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  phone varchar(15) DEFAULT NULL,
  address varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Thêm dữ liệu mẫu vào bảng users
INSERT INTO users (id, full_name, email, username, password, phone, address) VALUES
(1, 'John Doe', 'johndoe@example.com', 'johndoe', 'password123', '1234567890', '123 Street Name'),
(2, 'Jane Doe', 'janedoe@example.com', 'janedoe', 'password456', '0987654321', '456 Avenue Road');

-- Tạo bảng categories (nếu chưa có)
CREATE TABLE IF NOT EXISTS categories (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Thêm dữ liệu mẫu vào bảng categories
INSERT INTO categories (id, name) VALUES
(1, 'Category 1'),
(2, 'Category 2'),
(3, 'Category 3'),
(4, 'Category 4'),
(5, 'Category 5');

-- Tạo bảng products (nếu chưa có)
CREATE TABLE IF NOT EXISTS products (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  price decimal(12,4) NOT NULL,
  qty int NOT NULL,
  category_id int NOT NULL,
  image varchar(255) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Thêm dữ liệu mẫu vào bảng products
INSERT INTO products (name, price, qty, category_id, image) VALUES
('T-shirt Wibu', 300.9900, 5, 1, 'image/product/1.jpg'),
('Suit', 179.9900, 44, 1, 'image/product/2.jpg'),
('Hoodie', 245.9900, 68, 1, 'image/product/3.jpg'),
('Jean Jacket', 300.9900, 50, 1, 'image/product/4.jpg'),
('Fall winter coat', 600.9900, 44, 1, 'image/product/5.jpg'),
('Coat', 170.9900, 68, 2, 'image/product/6.jpg'),
('T-shirt Leesin', 60.9900, 17, 2, 'image/product/7.jpg'),
('T-shirt Wibu 2', 150.9900, 68, 2, 'image/product/8.jpg'),
('Fat Jacket', 170.9900, 60, 2, 'image/product/9.jpg');


-- Tạo bảng orders (nếu chưa có)
CREATE TABLE IF NOT EXISTS orders (
  id int NOT NULL AUTO_INCREMENT,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  grand_total decimal(12,4) NOT NULL,
  paid decimal(12,4) DEFAULT NULL,
  payment_method varchar(50) NOT NULL,
  shipping_address varchar(255) NOT NULL,
  telephone varchar(15) NOT NULL,
  customer_name varchar(100) NOT NULL,
  user_id int,
  email varchar(100) NOT NULL,
  status tinyint NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tạo bảng order_items (nếu chưa có)
CREATE TABLE IF NOT EXISTS order_items (
  id int NOT NULL AUTO_INCREMENT,
  order_id int NULL,
  product_id int NOT NULL,
  buy_qty int NOT NULL,
  price decimal(12,4) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Tạo bảng cart (nếu chưa có)
CREATE TABLE IF NOT EXISTS cart (
  id int NOT NULL AUTO_INCREMENT,
  user_id int NOT NULL,
  product_id int NOT NULL,
  quantity int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;