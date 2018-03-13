<?php

class meeting extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function add($meetingID) {

		$data['meetingID'] = $meetingID;
		($meetingID) ? $this->view('meeting/add', $data) : $this->view('error/index');		
	}

	public function addTalk() {

		$data = $this->model->getPostData();

		if(!$data) $this->view('meeting/add', $data);
		
		 $jsonArray['talk']['id']  = $data['meetingID'] . '/' . round(microtime(true) * 1000);

		 unset($data['meetingID']);

		foreach ($data as $key => $value) {

			$keyFragments = explode('-', $key);
			$jsonArray{$keyFragments[0]}{$keyFragments[1]} = $data{$key};
		}

		$json = json_encode($jsonArray, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		$jsonPath = PHY_DATA_URL . 'meetings/' . $jsonArray['talk']['id'];
		$jsonFile = $jsonPath . '/index.json';

		if (!$json) $this->view('error/prompt', array('msg' => 'Error in forming json'));
		if (!mkdir($jsonPath, 0775, true)) $this->view('error/prompt', array('msg' => 'Error in creating talk folder'));
		if (!file_put_contents($jsonFile, $json)) $this->view('error/prompt', array('msg' => 'Error in creating file'));
		
		if (!$this->addPicture(str_replace('/', '_', $jsonArray['talk']['id']))) $this->view('page/prompt', array('msg' => 'Talk added but profile picture not uploaded'));
		$this->redirect('gitcvs/updateRepo');
	}

	public function addPicture($id) {

		$id = str_replace('_', '/', $id);

		$tempFile = $_FILES['profilePicture']['tmp_name'];
		$fileName = PHY_DATA_URL . 'meetings/' . $id . '/profile.jpg';

		return (move_uploaded_file($tempFile, $fileName)) ? true : false;
	}

	public function listing($meetingID) {

		if(isset($_SESSION['login'])){

			$talks['talks'] = $this->model->getTalks($meetingID);
			$talks['meetingID'] = $meetingID;
			$this->view('meeting/listing', $talks);
		}
		else{

			$this->redirect('user/login');
		}
	}

	public function editTalk($meetingID, $id) {

		if(isset($_SESSION['login'])){
			$talkFile = PHY_DATA_URL . 'meetings/' . $meetingID	. '/' . $id . '/index.json';
			$talkJsonString = file_get_contents($talkFile);
			$talk = json_decode($talkJsonString, true);
		
			($talk) ? $this->view('meeting/editTalk', $talk) : $this->view('error/index');
		}
		else{
			
			$this->redirect('user/login');	
		}
	}

	public function saveTalk() {

		$postData = $this->model->getPostData();
		$data = $postData['data'];
		$id = $data['talk']['id'];
		$jsonFile = PHY_DATA_URL . 'meetings/' . $id . '/index.json';
		$json = html_entity_decode(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

			if(file_put_contents($jsonFile, $json)) {

			echo 'True';
		}
	}

	public function deleteTalk($id) {

		$id = str_replace('_', '/', $id);
		$path = PHY_DATA_URL . 'meetings/' . $id;

		array_map('unlink', glob($path . '/*.*'));
		echo (rmdir($path)) ? str_replace('/', '_', $id) : 'False';
	}
}

?>
