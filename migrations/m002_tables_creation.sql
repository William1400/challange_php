CREATE TABLE types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255) NOT NULL
) ENGINE=INNODB;

CREATE TABLE companies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    VAT_number VARCHAR(255) NOT NULL,
    type_id INT,
    FOREIGN KEY (type_id) 
        REFERENCES types(id)
) ENGINE=INNODB;

CREATE TABLE peoples (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255) NOT NULL,
    company_id INT,
    FOREIGN KEY (company_id) 
        REFERENCES companies(id)
) ENGINE=INNODB;

CREATE TABLE invoices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    company_id INT,
    people_id INT,
    FOREIGN KEY (company_id) 
        REFERENCES companies(id),
    FOREIGN KEY (people_id) 
        REFERENCES peoples(id)
) ENGINE=INNODB;



