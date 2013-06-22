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
		$buttons[] = $this->buttons('pain','/myhealth/pain','<i class="icon-user-md icon-3x"></i>');
		$buttons[] = $this->buttons('discomfort','javascript:alert("Not available in the ptototype");','/img/discomfort.png');
		$buttons[] = $this->buttons('treatment','/myhealth/treatment','<i class="icon-medkit icon-3x"></i>');
		$buttons[] = $this->buttons('rest','/myhealth/rest','<i class="icon-cloud icon-3x"></i>');
		return $buttons;
	}

	public function myneeds() {
		$buttons = array();
		$buttons[] = $this->buttons('self','javascript:alert("Not available in the ptototype");','/img/discomfort.png');
		$buttons[] = $this->buttons('environment','/myhealth/treatment','/img/treatment.png');
		$buttons[] = $this->buttons('family','/myhealth/rest','/img/rest.png');
		$buttons[] = $this->buttons('pain','/myhealth/pain','/img/pain.png');
		return $buttons;
	}

	public function body() {
		return $this->buttons('body','/myhealth/pain/head','/img/body.png');
	}

	public function head() {
		return $this->buttons('head','/myhealth/pain/eye','/img/head.png');
	}

	public function eye() {
		return $this->buttons('eye','/myhealth/rest','/img/eye.png');
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