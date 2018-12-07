CREATE TABLE forum (
  id int(11) not null AUTO_INCREMENT PRIMARY KEY,
  title varchar(128) not null,
  question TEXT not null,
  article varchar(128) not null,
  articleId varchar(128) not null,
  category varchar(128) not null,
  asker varchar(128) not null,
  askerId varchar(128) not null
);
