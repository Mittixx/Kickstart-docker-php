CREATE TABLE posts
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    content TEXT,
    userId INT,
    date DATETIME,
    FOREIGN KEY (userId) REFERENCES users(id)
);

INSERT INTO posts(title, content, userId, date) 
VALUE (
	"The first ring",
	"Fugit id assumenda ut velit consectetur corporis illo nostrum. Exercitationem doloribus recusandae mollitia veniam asperiores deserunt. Voluptates repudiandae ipsum beatae. Cum itaque sed non nulla. Sed tenetur totam nam.",
	1,
	NOW());

INSERT INTO posts(title, content, userId, date) 
VALUE (
	"The two towers",
	"Exercitationem doloribus recusandae mollitia veniam asperiores deserunt. Cum itaque sed non nulla. Sed tenetur totam nam.",
	2,
	NOW());