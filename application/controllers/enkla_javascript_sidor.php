<?php if ( ! defined('BASEPATH')) exit('Ingen direkt åtkomst tillåts');
/**
 * 
 */
class Enkla_javascript_sidor extends CI_Controller {
	
	private $m_headlab = []; // Tom behållare för vy märken.
	
	/**
	 * Konstruktor
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('MySession');
		
		// Används för att visa vilken navigations länk som ska vara aktiv i vyn.
		$this->m_headlab['header_nav_link1'] = '';
		$this->m_headlab['header_nav_link2'] = '';
		$this->m_headlab['header_nav_link3'] = ' class="active"';
	}
	
	/**
	 * 
	 */
	public function sorted_array()
	{
		$this->load->helper('url');
		//$this->load->model('account_model'); // Laddar modell.
		//$data = $this->account_model->login(); // Kör modell
	
		$data = 'Test....';
	
		$this->view('sorted_array.php', $data); // Kör vyn.
	}
	
	/**
	 * Användaren skickar epost till oss.
	 */
	public function email_us()
	{
		$this->load->helper('url');
		//$this->load->model('account_model'); // Laddar modell.
		//$data = $this->account_model->login(); // Kör modell
		
		$data = 'Test....';
		
		$this->view('email_us.php', $data); // Kör vyn.
	}
	
	/**
	 * Sammanställer vyn.
	 * @param string $p_page Webbsidan som vyn ska rendera.
	 * @param array $p_data Vy märken.
	 */
	private function view($p_page, $p_data)
	{
		//Visa 404 om sidan inte finns.
		if ( ! file_exists(APPPATH.'/views/enkla_javascript_sidor/' . $p_page))
		{
			show_404();
		}
	
		$this->load->view('templates/header', $this->m_headlab);
		$this->load->view('enkla_javascript_sidor/' . $p_page , $p_data);
		$this->load->view('templates/footer');
	}
}