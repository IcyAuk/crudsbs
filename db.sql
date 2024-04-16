--@block
-- DATABASE WITH USERS & STAFF, COMMENTS, MESSAGES, ARTICLES
CREATE DATABASE IF NOT EXISTS crudsbs;
USE crudsbs;

--@block
-- machine cannot CREATE nor DROP.
-- machine will only UPDATE, INSERT, DELETE, READ
CREATE USER 'crudsbs_machine'@'localhost' IDENTIFIED BY '1234'; --machine is the web app
GRANT SELECT, INSERT, UPDATE, DELETE ON crudsbs.* TO 'crudsbs_machine'@'localhost';

--@block
CREATE TABLE users(
    user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(40) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL, -- to be hashed beforehand by the web app
    is_veterinary BOOLEAN DEFAULT FALSE,
    is_mod BOOLEAN DEFAULT FALSE,
    is_admin BOOLEAN DEFAULT FALSE
);

CREATE TABLE comments(
    comment_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED,
    comment_type INT NOT NULL, -- 1 comment awaiting approval, 2 validated comment, 3 message
    comment_text TEXT,
    posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE articles(
    article_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE article_images(
    image_id INT UNSIGNED PRIMARY KEY,
    article_id INT UNSIGNED,
    image_path VARCHAR(255) NOT NULL,
    FOREIGN KEY (article_id) REFERENCES articles(article_id)
);
