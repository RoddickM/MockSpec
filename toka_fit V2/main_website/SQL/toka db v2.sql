CREATE TABLE USERS (
  usersID INT PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(25),
  lastname VARCHAR(25),
  email VARCHAR(25),
  phone_no VARCHAR(11),
  post_code VARCHAR(8),
  password VARCHAR(150)
);

CREATE TABLE FORUM_POST (
  postID INT PRIMARY KEY AUTO_INCREMENT,
  usersID INT,
  post_content VARCHAR(150),
  post_timestamp timestamp,
  post_replies INT
);

CREATE TABLE `FORUM_COMMENTS` (
  commentID INT PRIMARY KEY AUTO_INCREMENT,
  usersID INT,
  postID INT,
  comment_timestamp timestamp,
  comment_content VARCHAR(800)
);

CREATE TABLE `ARTICLE_PAGE` (
  articleID INT PRIMARY KEY AUTO_INCREMENT,
  author VARCHAR(30),
  article_created timestamp,
  article_content VARCHAR(10000),
  article_image VARCHAR(100)
);

CREATE TABLE `ARTICLE_COMMENT` (
  art_commentID INT PRIMARY KEY AUTO_INCREMENT,
  usersID INT,
  art_comment_timestamp timestamp,
  art_comment_content VARCHAR(500)
);

CREATE TABLE `VIDEO_PAGE` (
  videoID INT PRIMARY KEY AUTO_INCREMENT,
  video_link VARCHAR(2048),
  video_title VARCHAR(100),
  video_description VARCHAR(2500)
);

CREATE TABLE `PT_PAGE` (
  ptID INT PRIMARY KEY AUTO_INCREMENT,
  pt_name VARCHAR(30),
  pt_desc VARCHAR(5000),
  pt_img VARCHAR(100),
  pt_phone_number INT(11),
  pt_email VARCHAR(25)
);

ALTER TABLE `FORUM_COMMENTS` ADD FOREIGN KEY (`commentID`) REFERENCES `USERS` (`usersID`);

ALTER TABLE `ARTICLE_COMMENT` ADD FOREIGN KEY (`usersID`) REFERENCES `USERS` (`usersID`);

ALTER TABLE `FORUM_POST` ADD FOREIGN KEY (`usersID`) REFERENCES `USERS` (`usersID`);

ALTER TABLE `FORUM_COMMENTS` ADD FOREIGN KEY (`postID`) REFERENCES `FORUM_POST` (`postID`);

ALTER TABLE USERS AUTO_INCREMENT=100;


