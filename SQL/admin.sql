CREATE table admin_user (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first varchar(20) NOT NULL,
    last varchar(20) NOT NULL,
    email varchar(128) NOT NULL,
    uid varchar(20) NOT NULL,
    pwd varchar(1000) NOT NULL
);
