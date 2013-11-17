#!/bin/bash

echo "use dxks" > sql_temp
cat tables | awk 'BEGIN{
    A="alter table " 
    B=" add column id int auto_increment key;"
    }
	{ 
		print A $1 B;
	}' >> sql_temp
mysql -u root -p123 < sql_temp

