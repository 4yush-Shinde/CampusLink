create database campuslink;
use campuslink;

-- *************************************************************** Faculty Login ************************************************************ --
create table faculty_login (username varchar(50) primary key, password varchar(16) not null);
insert into faculty_login values ('admin1', 'AyushShinde2004'), ('admin2', 'AvanishMore2004');
select * from faculty_login;