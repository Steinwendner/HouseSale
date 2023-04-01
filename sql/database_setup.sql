CREATE TABLE your_table_name (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    emailAdress VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    creation_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
