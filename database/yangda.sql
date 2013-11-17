test_type

truncate table test_type;
alter table set auto_increment=1;
insert into test_type (name) values('初级练习');
insert into test_type (name) values('初级考试');
insert into test_type (name) values('高级练习');
insert into test_type (name) values('高级考试');
insert into test_type (name) values('UOES毕业');
insert into test_type (name) values('备用');
