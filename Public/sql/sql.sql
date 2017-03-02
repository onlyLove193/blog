/**
 * 博文表
 * @type {[type]}
 */
create table bl_article(
aid int unsigned auto_increment primary key ,
title char(100) not null default '',
#作者ID
auid int not null default 0,
content text,
preread char(255) not null default '',
hot tinyint(1) not null default 1,
new tinyint(1) not null default 1,
#文章类别ID
cid int not null default 0,
red int not null default 94,
wtime char(15) not null default 0,
aimg char(100) not null default '',
status tinyint(1) not null default 1
)engine=myisam default charset utf8;

/**
 * 博文评论表
 * @type {[type]}
 */
create table bl_comment(
cid int unsigned not null auto_increment primary key,
auid int unsigned not null default 0,
aid int unsigned not null default 0,
content char(255) not null default '',
time char(10) not null default 0,
status tinyint(1) default 1
)engine=myisam charset utf8;

/**
 * 文章所属类别表
 * @type {[type]}
 */
create table bl_category(
gid int unsigned not null auto_increment primary key,
cname char(20) not null default '',
pid int not null default 0,
descript char(255) not null default '',
keywords varchar(80) not null default '',
status tinyint(1) not null default 1
)engine=myisam charset utf8;

/**
 * 作者，游客表
 * @type {[type]}
 */
create table bl_author(
tid int unsigned not null auto_increment primary key,
uname char(20) not null default '',
timg varchar(50) not null default '',
status tinyint(1) not null default 1
)engine=myisam charset utf8;