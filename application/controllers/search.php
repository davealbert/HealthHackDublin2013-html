<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	public function index() {
		$data['title'] = 'Search';
		$data['seachText'] = $this->input->get_post('q');
		$this->render_page('searchDisplay', $data);
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */