CREATE TABLE product (
  id int(18) AUTO_INCREMENT PRIMARY KEY ,
  product_id int(18) NOT NULL,
  product_name varchar(255) NOT NULL,
  product_price int(10) NOT NULL,
  product_article varchar(255) NOT NULL,
  product_quantity int(255) NOT NULL DEFAULT '0',
  date_create datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  visibility tinyint(1) NOT NULL DEFAULT '1'
);

INSERT INTO product (product_id, product_name, product_price, product_article, product_quantity, date_create) VALUES
(1, 'product1', 1500, 'article1', 21, '2021-10-13 19:24:05'),
(2, 'product2', 1515, 'article2', 20, '2021-10-13 22:40:04'),
(3, 'product3', 1151, 'article3', 224, '2021-10-13 22:42:04'),
(4, 'product4', 1221, 'article4', 1284, '2021-10-14 20:11:11'),
(5, 'product5', 1221, 'article5', 1223, '2021-10-11 20:11:11'),
(6, 'product6', 1221, 'article6', 1223, '2021-10-01 20:11:11'),
(7, 'product7', 1221, 'article7', 1223, '2021-09-14 20:11:11'),
(8, 'product8', 1550, 'article8', 10, '2021-10-15 02:09:59'),
(9, 'product9', 1550, 'article9', 10, '2021-10-15 02:10:02');

