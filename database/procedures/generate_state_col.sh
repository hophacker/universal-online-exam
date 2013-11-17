#!/bin/bash

cat tables | awk 'BEGIN{
    A="alter table " 
    B=" add column state smallint default 1;"
    }
	{ 
		print A $1 B;
	}'
