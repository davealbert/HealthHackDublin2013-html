<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index() {
		$data['title'] = 'Search';
		$data['seachText'] = json_encode($this->data_model->search($this->input->get_post('q')));

		$this->render_page('searchDisplay', $data);
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */