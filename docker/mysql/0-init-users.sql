CREATE TABLE users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO users(username,password) 
VALUE ("ulfric",
	"hiichi");

INSERT INTO users(username,password) 
VALUE ("michel",
	"kifli");

INSERT INTO users(username,password) 
VALUE ("paco",
	"mokeo");