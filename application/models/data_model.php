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
		$buttons[] = $this->buttons('PAIN','/myhealth/pain','<i class="icon-user-md icon-3x"></i>');
		$buttons[] = $this->buttons('DISCOMFORT','#','<i class="icon-thumbs-down icon-3x"></i>');
		$buttons[] = $this->buttons('TREATMENT','#','<i class="icon-medkit icon-3x"></i>');
		$buttons[] = $this->buttons('REST','#','<img style="width:180px;" src="/img/bed.png">');
		return $buttons;
	}

	public function myneeds() {
		$buttons = array();
		$buttons[] = $this->buttons('SELF','#','<i class="icon-user icon-3x"></i>');
		$buttons[] = $this->buttons('ENVIRONMENT','#','<i class="icon-cogs icon-3x"></i>');
		$buttons[] = $this->buttons('FAMILY','#','<i class="icon-group icon-3x"></i>');
		$buttons[] = $this->buttons('PAIN','/myneeds/pain','<i class="icon-user-md icon-3x"></i>');
		return $buttons;
	}

	public function body() {
		$buttons = array();
		$buttons[] = $this->buttons('FRONT','/myhealth/pain/head','/img/body2.png');
		$buttons[] = $this->buttons('BACK','/myhealth/pain/head','/img/bodyBack.png');
		return $buttons;
	}

	public function head() {
		$buttons = array();
		$buttons[] = $this->buttons('HEAD','/myhealth/pain/eye','/img/head3.png');
		return $buttons;
	}

	public function eye() {
		$buttons = array();
		$buttons[] = $this->buttons('EYE','/myhealth/pain/eye','/img/eye.png');
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