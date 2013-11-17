<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of session
 *
 * @author j
 */
class session {

    private static $inactive = 1800;

    public static function initial($user, $logtype) {
        session_start();
        if ($logtype == 1) $_SESSION['student'] = $user;
        else {
            $_SESSION['manager'] = $user;
            $_SESSION['logtype'] = $logtype;
        }
        
        $_SESSION['start'] = time();
    }
/*
 * first check if session is expired ==>header
 * second check if user and logtype is registered
 * ret: logtype:
 * -1, unregistered.
 * 1: student
 * 2: dept manager
 * 3: school manager
 */
    public static function check($isManager) {
        session_start(); 
        if (isset($_SESSION['start'])) {
            $session_life = time() - $_SESSION['start'];
            if ($session_life > $inactive) 
                return -1;
            else $_SESSION['start'] = time();
        }
        
        if ($isManager){
            if (isset($_SESSION['manager']) && isset($_SESSION['logtype']))
                return $_SESSION['logtype'];
        }
        else{
            if (isset($_SESSION['student'])) return 1;
        }
        return -1;
    }
}
?>