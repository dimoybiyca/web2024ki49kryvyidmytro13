CREATE TABLE web.portfolio_projects (
  project_id INT AUTO_INCREMENT PRIMARY KEY,
  project_name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  technologies TEXT NOT NULL
);

CREATE TABLE web.users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(255) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE web.reviews (
                             id INT AUTO_INCREMENT PRIMARY KEY,
                             username VARCHAR(100) NOT NULL,
                             review TEXT NOT NULL,
                             is_positive BOOLEAN NOT NULL,
                             created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE web.fishing (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(50) NOT NULL,
                       password VARCHAR(255) NOT NULL
);
