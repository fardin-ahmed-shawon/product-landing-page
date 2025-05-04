CREATE TABLE admin_info (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    admin_username VARCHAR(50) UNIQUE NOT NULL,
    admin_password VARCHAR(255) NOT NULL
);

CREATE TABLE product_info (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_title VARCHAR(255) NOT NULL,
    product_regular_price INT NOT NULL,
    product_price INT NOT NULL,
    available_stock INT NOT NULL,
    product_keyword VARCHAR(255),
    product_code VARCHAR(255),
    product_img1 VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE order_info (
    order_no INT PRIMARY KEY AUTO_INCREMENT,
    user_first_name VARCHAR(50) NOT NULL,
    user_last_name VARCHAR(50) NOT NULL,
    user_phone VARCHAR(20) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    user_address TEXT NOT NULL,
    city_address VARCHAR(50) NOT NULL,
    invoice_no VARCHAR(50) NOT NULL,
    product_id INT NOT NULL,
    product_title VARCHAR(255) NOT NULL,
    product_quantity INT NOT NULL,
    total_price INT NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    order_status VARCHAR(50) DEFAULT 'Pending',
    order_visibility VARCHAR(50) DEFAULT 'Show',
    FOREIGN KEY (product_id) REFERENCES product_info(product_id) ON DELETE CASCADE
);

CREATE TABLE payment_info (
    serial_no INT PRIMARY KEY AUTO_INCREMENT,
    invoice_no VARCHAR(50) NOT NULL,
    order_no INT NOT NULL UNIQUE,
    order_status VARCHAR(50) DEFAULT 'Pending',
    order_visibility VARCHAR(50) DEFAULT 'Show',
    payment_method VARCHAR(50) NOT NULL,
    acc_number VARCHAR(50),
    transaction_id VARCHAR(50),
    payment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    payment_status VARCHAR(50) DEFAULT 'Unpaid',
    FOREIGN KEY (order_no) REFERENCES order_info(order_no) ON DELETE CASCADE
);