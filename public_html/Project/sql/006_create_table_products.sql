CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) UNIQUE,  
    description text,
    category varchar(30) UNIQUE,
    stock int DEFAULT  0,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    unit_price float(32,2) DEFAULT  0.99, 
    visibility bool DEFAULT 0,
    check (stock >= 0), -- don't allow negative stock; I don't allow backorders
    check (unit_price >= 0) -- don't allow negative unit prices
)