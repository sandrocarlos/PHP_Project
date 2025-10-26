CREATE DATABASE IF NOT EXISTS window_shopping 
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE window_shopping;

CREATE TABLE IF NOT EXISTS product(
    product_ID      INT             AUTO_INCREMENT  PRIMARY KEY,
    product_name    VARCHAR(150)    NOT NULL,
    description     VARCHAR(500)    NOT NULL,
    price           FLOAT           NOT NULL        CHECK(price > 0),
    updated_dt      TIMESTAMP       DEFAULT CURRENT_TIMESTAMP 
);