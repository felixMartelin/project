create table Brawler (
IdBrawler integer not null primary key auto_increment,
NomBrawler varchar(45) not null,
DescBrawler varchar(600) not null,
VieBrawler integer not null,
DegatBrawler integer not null,
DegatSuperBrawler integer,
StarPowerBrawler varchar(45) not null,
DescStarPower varchar(200) not null
) engine=innodb character set utf8 collate utf8_unicode_ci

create table Joueur (
IdJoueur integer not null primary key auto_increment,
NomJoueur varchar(45) not null,
TropheeMaxJoueur integer,
TropheeJoueur integer
) engine=innodb character set utf8 collate utf8_unicode_ci

create table BrawlerJoueur (
IdBrawlerJoueur integer not null,
IdJoueurBrawler integer not null,
TropheeBrawlerJoueur integer,
NiveauBrawlerJoueur integer not null,
DebloquerBrawlerJoueur integer
) engine=innodb character set utf8 collate utf8_unicode_ci