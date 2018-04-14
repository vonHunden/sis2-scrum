CREATE TABLE room 
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name_room VARCHAR(10), -- 693A o 642
    max_capacity_chairs INTEGER UNSIGNED,
    current_chairs INTEGER UNSIGNED,
    defective_chairs INTEGER UNSIGNED DEFAULT 0,
);

CREATE TABLE schedule
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    start VARCHAR(4) NOT NULL,
    end VARCHAR(4) NOT NULL 
);

CREATE TABLE day
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    day VARCHAR(15) NOT NULL;
);

CREATE TABLE availability
(
    id_room INTEGER UNSIGNED,
    id_schedule INTEGER UNSIGNED,
    id_day INTEGER UNSIGNED
);

CREATE TABLE product
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_category INTEGER UNSIGNED,
    name VARCHAR(50),
    price
    stock
);

-- Puede ser type o category
CREATE TABLE category_product
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(50)
);
