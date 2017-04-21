create database doubt default charset utf8;

use doubt;

create table user(
	id int(11)  not null primary key auto_increment comment '用户id',
	name varchar(15) not null comment '用户名',
	pwd varchar(15) not null comment '密码',
	created_at VARCHAR(25) not null comment '创建时间',
  updated_at VARCHAR(25) not null  COMMENT '更新时间'
);

create table teacher(
	id int(11)  not null primary key auto_increment comment '教师id',
	name varchar(15) not null comment '教师名',
	pwd varchar(15) not null comment '密码',
	created_at VARCHAR(25) not null comment '创建时间',
  updated_at VARCHAR(25) not null  COMMENT '更新时间'
);

create table question(
  id int(11)  not null primary key auto_increment comment '问题id',
	name varchar(15) not null comment '问题名',
	description varchar(50) not null comment '描述',
	content varchar(200) not null comment '内容',
	userId int(11) not null comment '用户id',
	created_at VARCHAR(25) not null comment '创建时间',
  updated_at VARCHAR(25) not null  COMMENT '更新时间'
);

create table reply(
  id int(11)  not null primary key auto_increment comment '回答id',
	questionId int(11) not null comment '问题id',
	content varchar(200) not null comment '内容',
	created_at VARCHAR(25) not null comment '创建时间',
  updated_at VARCHAR(25) not null  COMMENT '更新时间'
);

create table token(
  id int(11)  not null primary key auto_increment comment 'tokenid',
	userId int(11) not null comment '用户id',
	content varchar(50) not null comment '密钥',
	created_at VARCHAR(25) not null comment '创建时间',
  updated_at VARCHAR(25) not null  COMMENT '更新时间'
);

alter table question add userId int(11) not null comment '用户id';