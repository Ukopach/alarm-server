<?php
/**
 * Alarm Service based on the example 
 *
 * @author Ukopach
 */
class AlarmService {

		
	/**
	 * Set Alarm should create or update an alarm. 
	 * We suppose that this method alter strategic data and that we don't want to serve it as RPC.
	 *
	 * @param string $something
	 * @return boolean
	 */
	//TODO define Parameters, currently only a stub returning the concatenated params
	public function setAlarm($param1, $param2, $param3) {

		return time() . "adfasdf//" .$param1 . $param2 . $param3;
	}

	/**
	 * getAllAlarms should return all currently saved alarms
	 * @return string
	*/	
	public function getAllAlarms() {
	
		return "getAllAlarms" . time() ;
	}
	
	function beep ($int_beeps = 1) {
			
	}
}
?>