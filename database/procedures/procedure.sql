-- attention
-- should append if not exists

use dxks;
DELIMITER //
create procedure student_exist(in user_name varchar(25),out result boolean) 
begin
 select false into result;
select distinct true into result from student where exists
 (select * from student where S_USER = user_name); 
end;
//

create procedure manager_exist(in choose int,in user_name varchar(25),out result boolean)
begin
select false into result;
case choose
when 0 then select distinct true into result from department where exists
(select * from department where S_USER = user_name);
when 1 then select distinct true into result from school_manager where exists
(select * from school_manager where S_USER = user_name);
end case;
select * from student; 
end;
//
