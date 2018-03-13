<?php

class meetingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function getTalks($meetingID) {

		$talkFiles = glob(PHY_DATA_URL . 'meetings/' . $meetingID . '/*', GLOB_ONLYDIR);

		$data = [];
		foreach ($talkFiles as $talkFile) {
			
			$talkJsonString = file_get_contents($talkFile . '/index.json');
			$talk = json_decode($talkJsonString, true);
			array_push($data, $talk);
		}

		return $data;
	}
}

?>