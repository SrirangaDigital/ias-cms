<?php

class meeting extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function addTalk() {
		
		$data = $this->model->getPostData();

		if(!$data) $this->redirect('Meetings/Add_Talk/');
		
		$jsonArray['speaker']['id'] = $jsonArray['talk']['id']= round(microtime(true) * 1000);

		foreach ($data as $key => $value) {

			$keyFragments = explode('-', $key);
			$jsonArray{$keyFragments[0]}{$keyFragments[1]} = $data{$key};
		}

		$json = json_encode($jsonArray, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		$jsonPath = PHY_DATA_URL . 'meetings/' . $jsonArray['speaker']['id'];
		$jsonFile = $jsonPath . '/index.json';

		if (!$json) $this->view('error/prompt', array('msg' => 'Error in forming json'));
		if (!mkdir($jsonPath, 0775, true)) $this->view('error/prompt', array('msg' => 'Error in creating talk folder'));
		if (!file_put_contents($jsonFile, $json)) $this->view('error/prompt', array('msg' => 'Error in creating file'));

		$this->view('page/prompt', array('msg' => 'Talk successfully added'));
	}

	public function listing() {

		$talks = $this->model->getTalks();
		($talks) ? $this->view('meeting/listing', $talks) : $this->view('error/index');
	}

	public function editTalk($id = '') {

		$talkFile = PHY_DATA_URL . 'meetings/' . $id . '/index.json';
		$talkJsonString = file_get_contents($talkFile);
		$talk = json_decode($talkJsonString, true);
		
		($talk) ? $this->view('meeting/editTalk', $talk) : $this->view('error/index');
	}
}

?>