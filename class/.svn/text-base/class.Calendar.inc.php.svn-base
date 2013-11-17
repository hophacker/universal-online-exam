<?php

require_once 'class.db_connect.inc.php';
class Calendar extends DB_Connect
{
    private $_y;
    private $_daysInMonth;
    private $_startDay;
    private $_useDate;
    private $_m;
    public function __construct($dbo=NULL, $useDate=NULL)
    {
        parent::__construct($dbo);
        if ( isset($userDate)) {
            $this->_userDate = $userDate;
        } else {
            $this->_userDate = date('Y-m-d H:i:s');
        }
        $ts = strtotime($this->_useDate);
        $this->_m = date('m', $ts);
        $this->_y = date('y', $ts);
        $this->_daysInMonth = cal_days_in_month(
            CAL_GREGORIAN,
            $this->_m,
            $this->_y
        );
        $ts = mktime(0, 0, 0, $this->_m, 1, $this->_y);
        $this->_startDay = date('w', $ts);
    }
    public function _loadEventData($id=NULL)
    {
        $sql = "select event_id, event_title, event_desc, event_start,        
            event_end from events";
        if (!empty($id)) {
            $sql .= "where event_id=$id";
        } else {
            $startTs = mktime(0, 0, 0, $this->_m, 1, $this->_y);
            $endTs = mktime(23, 59, 59, $this->_m+1, 0, $this->_y);
            $startDate = date('Y-m-d H:i:s', $startTs);
            $endDate = date('Y-m-d H:i:s', $endTs);
            $sql .= "where event_start between $startDate and $endDate
                order by event_start";
            try{
                $stmt = $this->db->prepare($sql);
                if (!empty($id)) {
                    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                }
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                return $results;
            }catch(Exception $e){
                die($e->getMessages());
                
            }
        
        }

    }
}
$cal = new Calendar;

