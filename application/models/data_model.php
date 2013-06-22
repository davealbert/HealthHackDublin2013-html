<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function addData($data) {
		if ($data) {
			return $this->db->insert('data', array('json_data' => $data));
		}

		return false;
	}

	public function allData($limit="") {
		if ($limit !== "") {
			$query = $this->db->get('data', $limit);
		} else {
			$query = $this->db->get('data');
		}

		return $this->jsonFromQuery($query);
	}

	public function search($value='') {
		$this->db->select("*")->from('data');
		$this->db->like("json_data",$value);

		$query = $this->db->get();
		return $this->jsonFromQuery($query);
	}

	public function myhealth() {
		$buttons = array();
		$buttons[] = $this->buttons('pain','/myhealth/pain','/img/pain.png');
		$buttons[] = $this->buttons('discomfort','/myhealth/discomfort','/img/discomfort.png');
		$buttons[] = $this->buttons('treatment','/myhealth/treatment','/img/treatment.png');
		$buttons[] = $this->buttons('rest','/myhealth/rest','/img/rest.png');
		return $buttons;
	}
	public function buttons($title, $link, $image)	{
		$button['title'] = $title;
		$button['link'] = $link;
		$button['image'] = $image;
		return $button;
	}

	private function jsonFromQuery($query='') {
		$json = array();
		foreach ($query->result() as $row) {
			unset($r);
			$r = array();

			foreach ($row as $key => $value) {
				$r[$key] = $value;
			}
			$json[] = $r;
		}
		return $json;
	}
}