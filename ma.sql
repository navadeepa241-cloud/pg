



CREATE TABLE Registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone VARCHAR(10),
    dob DATE,
    email VARCHAR(100),
    address TEXT,
    joining_date DATE,
    sharing_type INT,
    amount DECIMAL(10, 2),
    payment_option VARCHAR(20)
);
