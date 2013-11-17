<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manager
 *
 * @author j
 */
require_once 'autoload.inc';
class manager extends DB_Connect{
    public function getAllDept(){
        $query = "select B.dept_id, B.dept_name, A.m_name, A.m_user  from manager 
            as A  right join department as B on A.dept_id=B.dept_id 
            where B.state=1 order by B.dept_id";
        $sth = $this->prepare($query);
        $sth->execute();
        return $sth->fetchAll();
    }
}
?>