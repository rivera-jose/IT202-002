ALTER table Products ADD COLUMN average_rating tinyint(1) 
default 0
COMMENT 'average number of ratings of product';