CREATE TABLE IF NOT EXISTS Orders(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    total_price float(32,2),
    address text,
    payment_method varchar(30),
    money_received float(32,2),
    FOREIGN KEY (user_id) REFERENCES Users(id),
    UNIQUE KEY (user_id),
)