#!/bin/bash

values=("STUDENT" "S_USER" "S_ID" "S_PWD" "DEPT_ID" "S_NAME" "S_DATE_YEAR" "S_DATE_MONTH" "S_DATE_DAY"  "S_CLAS S" "S_MAIL" "SCORE_1" "SCORE_2" "SCORE_3" "SCORE_ANS" "SCORE_TYPE" "END_SEC")

echo ${values[@]};
echo ${#values[*]};

for ((i=1; i < ${#values[*]}; i++));
do
    sed -i 's/"'${values[i]}'"/'${values[i]}'/' STUDENT.sql

done
