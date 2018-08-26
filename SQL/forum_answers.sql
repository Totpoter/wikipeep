CREATE TABLE forum_answers (
  id int(11) not null AUTO_INCREMENT PRIMARY KEY,
  postId int(11) not null,
  answerUser varchar(128) not null,
  answer TEXT not null
);
