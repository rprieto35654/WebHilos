create database crud2;
use crud2;

/*
create table person(
	id int not null auto_increment primary key,
	name varchar(500) not null,
	lastname varchar(500) not null,
	address varchar(100) not null,
	phone varchar(100) not null,
	email varchar(255) not null,
	created_at datetime not null
);
*/

create table products(
	id int not null auto_increment primary key,
	prd_name varchar(500) not null,
	prd_category varchar(500) not null,
	prd_price decimal
);


INSERT INTO `products` (`id`, `prd_name`, `prd_category`, `prd_price`) VALUES (NULL, 'producto 1', 'categoria 1', '787');
INSERT INTO `products` (`id`, `prd_name`, `prd_category`, `prd_price`) VALUES (NULL, 'producto 2', 'categoria 2', '787');
INSERT INTO `products` (`id`, `prd_name`, `prd_category`, `prd_price`) VALUES (NULL, 'producto 3', 'categoria 1', '787');