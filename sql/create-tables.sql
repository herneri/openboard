CREATE TABLE IF NOT EXISTS boards (
	board_id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL UNIQUE,
	post_total INT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS images (
	image_id INT AUTO_INCREMENT PRIMARY KEY,
	image_path VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS posts (
	post_id INT AUTO_INCREMENT PRIMARY KEY,

	poster_name VARCHAR(20) DEFAULT 'Anonymous',
	title VARCHAR(25) NOT NULL,
	content VARCHAR(255) NOT NULL,
	posted_on DATE NOT NULL,

	comment_count INT DEFAULT 0,

	image_id INT NOT NULL,
	FOREIGN KEY(image_id) REFERENCES images(image_id),

	board_id INT NOT NULL,
	FOREIGN KEY(board_id) REFERENCES boards(board_id)
);

CREATE TABLE IF NOT EXISTS comments (
	comment_id INT AUTO_INCREMENT PRIMARY KEY,

	poster_name VARCHAR(15) DEFAULT 'Anonymous',
	content VARCHAR(255) NOT NULL,
	posted_on DATE NOT NULL,

	post_id INT NOT NULL,
	FOREIGN KEY(post_id) REFERENCES posts(post_id),

	image_id INT,
	FOREIGN KEY(image_id) REFERENCES images(image_id)
); 

CREATE TABLE IF NOT EXISTS admins (
	admin_id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL UNIQUE,
	password_hash BLOB NOT NULL,
	salt BLOB NOT NULL
);

CREATE TABLE IF NOT EXISTS blocked_ips (
	ip_id INT AUTO_INCREMENT PRIMARY KEY,
	ipv6_address VARCHAR(39) NOT NULL UNIQUE,
	ban_until DATE NOT NULL,
	ban_reason VARCHAR(255) NOT NULL,
	admin_id INT NOT NULL,
	FOREIGN KEY(admin_id) REFERENCES admins(admin_id)
);
