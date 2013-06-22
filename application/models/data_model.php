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