<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index() {
		echo "This is the API";
	}

	public function data($value='') {
		// $json['title'] = 'api';
		// $json['value'] = $value;
		$json = $this->data_model->allData($value);
		$this->render_json($json);
	}

	public function add($value=''){
		if($this->data_model->addData($value)) {
			echo "OK";
		} else {
			echo "ERROR";
		}

	}
}

/* End of file api.php */
/* Location: ./application/controllers/api.php */