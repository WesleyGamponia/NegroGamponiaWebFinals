
create database mapDB;
use mapDB;
drop database mapDB;

CREATE TABLE `map` (
  `mapID` int PRIMARY KEY AUTO_INCREMENT,
  `mapName` varchar(255)
);
CREATE TABLE `tile` (
  `tileID` int PRIMARY KEY auto_increment,
  `mapID` int,
  `passable` int,
  `encounter` int,
  `imagePath` varchar(255)
);
create table `save`(
	saveID int PRIMARY KEY auto_increment,
    mapID int,
    tileID int,
    money int,
    lives int
);
drop table save;
insert into save (mapID,tileID,money,lives)values(1,1,0,5);
select * from save;
select * from tile;