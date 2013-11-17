#!/bin/bash
if [ $1 == "-c" ] 
then 
	old=$2
	new=$3
	grep "$old" . --exclude-dir=.svn --exclude-dir=Smarty/cache --exclude-dir=Smarty/templates_c  -Rl  | xargs sed -i "s/$old/$new/g"

elif [ $1 == "-f" ]
then
	old=$2
	grep "$old" . --exclude-dir=.svn --exclude-dir=Smarty/cache --exclude-dir=Smarty/templates_c  -R

fi
