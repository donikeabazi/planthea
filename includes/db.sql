create table articles(
	idArticle int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title TINYTEXT NOT NULL,
    body LONGTEXT NOT NULL,
    image LONGTEXT NOT NULL,
    created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

create table users(
	idUsers int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL
);
