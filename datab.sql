-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th10 01, 2024 lúc 02:33 AM
-- Phiên bản máy phục vụ: 8.0.35
-- Phiên bản PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Chọn cơ sở dữ liệu
USE datab;

-- Tạo bảng `users`
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tạo bảng `categories`
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Đang đổ dữ liệu cho bảng `categories`
INSERT INTO `categories` (`id`, `NAME`) VALUES
(1, 'Luggage'),
(2, 'Backpack'),
(3, 'Bag'),
(4, 'Men'),
(5, 'Women');

-- Tạo bảng `products`
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) DEFAULT NULL,
  `price` decimal(12,4) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Đang đổ dữ liệu cho bảng `products`
INSERT INTO `products` (`id`, `NAME`, `price`, `qty`, `category_id`, `image`) VALUES
(1, 'T-shirt Wibu', 300.9900, 5, 1, 'image/product/1.jpg'),
(2, 'Suit', 179.9900, 44, 1, 'image/product/2.jpg'),
(3, 'Hoodie', 245.9900, 68, 1, 'image/product/3.jpg'),
(4, 'Jean Jacket', 300.9900, 50, 1, 'image/product/4.jpg'),
(5, 'Fall winter coat', 600.9900, 44, 1, 'image/product/5.jpg'),
(6, 'Coat', 170.9900, 68, 2, 'image/product/6.jpg'),
(7, 'T-shirt Leesin', 60.9900, 17, 2, 'image/product/7.jpg'),
(8, 'T-shirt Wibu 2', 150.9900, 68, 2, 'image/product/8.jpg'),
(9, 'Fat Jacket', 170.9900, 60, 2, 'image/product/9.jpg');

-- Tạo bảng `orders`
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `grand_total` decimal(12,4) DEFAULT NULL,
  `paid` decimal(12,4) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `telephone` int DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tạo bảng `order_items`
CREATE TABLE `order_items` (
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `buy_qty` int DEFAULT NULL,
  `price` decimal(12,4) NOT NULL,
  FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tạo bảng `cart`
CREATE TABLE `cart` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Cập nhật AUTO_INCREMENT cho các bảng
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
