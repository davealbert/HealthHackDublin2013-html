<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	public function index() {
		echo "This is the API";
	}

	public function data($value='') {
		$json['title'] = 'api';
		$json['value'] = $value;
		$this->render_json($json);
	}
}

/* End of file api.php */
/* Location: ./application/controllers/api.php */