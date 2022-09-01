drop Database myApp_db;
CREATE Database myApp_db;
use myApp_db;


CREATE table tbl_users(
u_id int primary key AUTO_INCREMENT,
full_name varchar(40) not NULL,
email varchar(30) not null,
mobile_no int(15) not null,
last_activity date ,
registred_date date ,
statu int(1) DEFAULT 1,
approve int(1) 
);


CREATE table tbl_categorys(
ca_id int primary key AUTO_INCREMENT,
statu int(1) DEFAULT 1,
title varchar(100) not null,
c_image varchar(300) not null
);

CREATE table tbl_posts(
p_id int primary key AUTO_INCREMENT,
ca_id int,
statu int DEFAULT 1,
title varchar(100) not null,
p_image varchar(100) not null,
date_creat date DEFAULT current_timestamp ,
post text not null,
view_c int(4) DEFAULT 0 ,
likes_c int(4) DEFAULT 0
);


CREATE table tbl_galerry(
p_id int,
images varchar(300) 
);

CREATE table tbl_settings(
app_version varchar(10) primary key,
email varchar(100) not NULL,
app_descreption varchar(300) not null,
app_name varchar(2) not null,
app_logo varchar(7) not null,
app_privacy text not NULL,
more_app_url varchar(40) not null,
os_id varchar(2) not null,
os_key varchar(7) not null,
apdate_force int(1) not NULL,
apdate_url varchar(300) not null,
apdate_vcode int(2) not null,
apdate_vname varchar(7) not null,
apdate_desc text not NULL
);

CREATE table tbl_Admins(
id int primary key DEFAULT 0,
fullname varchar(100) not NULL,
username varchar(40) not null,
password_a varchar(40) not null,
a_image varchar(100) 
);

CREATE table tbl_Ads(
publisher_id varchar(100) primary key,
interstetial_id varchar(100) not NULL,
native_id varchar(100) not null,
openads_id varchar(100) not null,
startup_id int(20) 
);

CREATE table tbl_comments(
c_id int primary key,
u_id int ,
p_id int ,
statu int DEFAULT 0,
comment varchar(300) not null,
constraint repo3 foreign key (u_id) References tbl_users(u_id),
constraint repo4 foreign key (p_id) References tbl_posts(p_id)
);

CREATE table tbl_reports(
r_id int primary key AUTO_INCREMENT,
p_id int ,
u_id int ,
title varchar(29) not null,
report varchar(300) not null,
CONSTRAINT reports_f FOREIGN KEY(p_id) REFERENCES tbl_posts(p_id),
constraint reports_g foreign key(u_id) References tbl_users(u_id)
);
INSERT INTO tbl_admins(
fullname ,
username ,
password_a 
) 
VALUES 
( 


'Elmabrouk abdelhamid',
'elmabrouk',
'elmabrouk'
);



-- INSERT INTO info(
-- cin ,
-- nom ,
-- prenom ,
-- age ,
-- adress 
-- ) 
-- VALUES 
-- (
-- 'i7154',
-- 'monil',
-- 'brahim',
-- 18,
-- 'beni mellal'
-- );


-- INSERT INTO info(
-- cin ,
-- nom ,
-- prenom ,
-- age ,
-- adress 
-- ) 
-- VALUES 
-- (
-- 'i71735',
-- 'hassoni',
-- 'hicham',
-- 25,
-- 'tamgie'
-- );


-- INSERT INTO info(
-- cin ,
-- nom ,
-- prenom ,
-- age ,
-- adress 
-- ) 
-- VALUES 
-- (
-- 'i753352',
-- 'jamali',
-- 'salma',
-- 22,
-- 'ben ahmad'
-- );
-- select * from info;