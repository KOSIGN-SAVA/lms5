<?php
class formapi extends CI_Controller{
	function __construct(){
		parent::__construct();
		//setUserContext($this);
		//$this->session->set_userdata('database','default');
	
		if ($this->session->userdata('language') === FALSE) {
			$availableLanguages = explode(",", $this->config->item('languages'));
			$languageCode = $this->polyglot->language2code($this->config->item('language'));
			if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
				if (in_array($_SERVER['HTTP_ACCEPT_LANGUAGE'], $availableLanguages)) {
					$languageCode = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
				}
			}
			$this->session->set_userdata('language_code', $languageCode);
			$this->session->set_userdata('language', $this->polyglot->code2language($languageCode));
		}
		$this->lang->load('users', $this->config->item('language'));
		
	}
	
	public function index(){
		echo "test";
	}
}