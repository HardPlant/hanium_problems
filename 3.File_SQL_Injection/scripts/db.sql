use test
create table upload (
    fid int(11) AUTO_INCREMENT PRIMARY KEY,
    filename varchar(128) NOT NULL,
    path varchar(256),
    content MEDIUMBLOB
);

insert into upload(filename, path)
values('c99.php', 'notice');