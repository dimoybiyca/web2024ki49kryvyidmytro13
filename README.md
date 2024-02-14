# WEB

### About repository
This repository created for course "WEB design technology" of Lviv Polytechnic National University

### Task
The point of this course is to create a modern dynamic website business card with your personal data or information using PHP, JavaScript, HTML, CSS and MySQL. POST and GET methods are used to navigate pages or send forms to the server. Use AJAX method to load parts of the page depending on user inputs.

#### Tasks
- Initiate GIT repository
- Create website business card
- Deploy 
- Authentication
- Create fraud site

### Student
| Number | Student | Fraud |
| ------ | ------- | ----- |
| 13 | Kryvyi Dmytro | Fishing |

## Project details
By employing a modern web development stack comprising PHP, JavaScript, HTML, CSS, and MySQL, this project aims to deliver a seamless and engaging user experience while ensuring the scalability, security, and maintainability of the application. With each technology playing a distinct yet complementary role, we strive to achieve our development objectives efficiently and effectively.

### PHP (The MVP of the Backend)
Step into the time machine and journey back to the glory days of web development with PHP. Sure, it may have been around since the dawn of the internet, but like a fine wine, PHP only gets better with age. Who needs fancy microservices when you've got the OG backend language holding down the fort.

### JavaScript
Behold, the marvel of modern engineering: JavaScript, the frontend powerhouse that doubles as a backend sidekick. Compiled within the depths of our PHP code, JavaScript is like a ninja, silently executing its tasks with the precision of a Swiss watch. Forget about single-page applications; we're all about that single-file compilation life.

### HTML and CSS
Get ready to embrace the classics with HTML and CSS, the dynamic duo that never goes out of style. While others may be busy chasing the latest and greatest frameworks, we're sticking to our roots and hand-crafting our web pages with the finesse of a seasoned artisan. Who needs CSS-in-JS when you've got good old-fashioned stylesheets.

### MySQL
Say hello to MySQL, the stalwart guardian of our precious data. While NoSQL databases may be all the rage these days, MySQL remains steadfast in its commitment to relational integrity and ACID compliance. Sure, it may not scale like its counterparts, but who needs scalability when you have the warm embrace of foreign key constraints.

## Run
How to run project

### Create network
 ```sh 
 docker network create <network>
 ```

### MySql
```sh 
 docker run -d -p 3306:3306 --name <mysql-name> -e MYSQL_ROOT_PASSWORD=<root_password> -e MYSQL_DATABASE=<database> -e MYSQL_USER=<user> -e MYSQL_PASSWORD=<password> --network <network> mysql/mysql-server:latest
```

### PHP Server
 ```sh 
 docker build -t php-server .
 docker run -d -p 80:80 --restart=always --name=iwnil-web -e DB_HOST=<mysql-name> -e DB_USER=<user> -e DB_PASS=<password> -e DB_NAME=<database> --network <network> php-server
 ```
