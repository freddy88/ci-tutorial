<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		/*----------  Checking for license  ----------*/
		/*if (!$this->checkLicense()) {
			die("License not valid. Please got to license section to verify.");
		}*/

		$this->load->model('m_kereta');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['navbar'] = $this->load->view('layout/v_navbar','',true);
		$data['header_title'] = "Kedai Kereta SK";

		$data_content['kereta'] = $this->m_kereta->get_kereta();

		// echo "<pre>";
		// print_r($data_content['kereta']);
		// echo "</pre>";
		// die();
		// print_r(encryptInUrl("Ayam"));

		$data['content'] = $this->load->view('kereta/v_kereta_v2',$data_content,true);

		$this->load->view('layout/v_main',$data);
	}


	public function add_kereta() {

		$data['navbar'] = $this->load->view('layout/v_navbar','',true);
		$data['header_title'] = "Kedai Kereta SK - Tambah Kereta";


		$this->form_validation->set_rules('jenis_kereta', 'Jenis kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );
		$this->form_validation->set_rules('jenama_kereta', 'Jenama kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );
		$this->form_validation->set_rules('warna_kereta', 'Warna kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );

		

		// echo $this->security->get_csrf_hash();
		// echo "<br>";
		// print_r($this->input->post());

		if(is_array($this->input->post())  && count($this->input->post()) > 0){

			$jenisKereta = $this->input->post("jenis_kereta");

			$jenamaKereta = $this->input->post("jenama_kereta");

			$warnaKereta = $this->input->post("warna_kereta");

			$data_save = array(
				'jenis_kereta' => $jenisKereta,
				'jenama_kereta' => $jenamaKereta,
				'warna_kereta' => $warnaKereta
			);

			// echo "<pre>";
			// print_r($data_save);
			// echo "</pre>";
			// die();

			if($this->form_validation->run() === TRUE) {

				$return_data = $this->m_kereta->save_kereta($data_save);

				if($return_data > 0) {

					//echo "<br>Berjaya";
					$this->session->set_flashdata('msg', 'Berjaya ditambah');
					
					//redirect(site_url("demo/add_kereta"));
				}
			}

			$_POST = array();
	    	$this->_field_data = array();
	
		}

		$data['content'] = $this->load->view('kereta/v_add_kereta','',true);;

		$this->load->view('layout/v_main',$data);
	}

	public function edit_kereta($idEnc = ""){

		
		$data['navbar'] = $this->load->view('layout/v_navbar','',true);
		$data['header_title'] = "Kedai Kereta SK - Kemaskini Kereta";

		$idDecrypt = decryptInUrl($idEnc);

		$data_content['car_detail'] = $this->m_kereta->get_kereta_by_id($idDecrypt);

		$data_content['id_encrypt'] = $idEnc;

		// print_r($data_content['car_detail']);

		$data['content'] = $this->load->view('kereta/v_edit_kereta',$data_content,true);;

		$this->load->view('layout/v_main',$data);

	}

	public function save_edit_kereta()
	{
		$this->form_validation->set_rules('jenis_kereta', 'Jenis kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );
		$this->form_validation->set_rules('jenama_kereta', 'Jenama kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );
		$this->form_validation->set_rules('warna_kereta', 'Warna kereta', 'required',
                        array('required' => '<span class="red"><b>%s diperlukan.</b></span>')
                );

		$idEnc = $this->input->post("id_kereta");

		// echo $this->form_validation->run();
		// echo "ayam";

		if($this->form_validation->run() === TRUE) {
			

			$idDecrypt = decryptInUrl($idEnc);

			$jenisKereta = $this->input->post("jenis_kereta");

			$jenamaKereta = $this->input->post("jenama_kereta");

			$warnaKereta = $this->input->post("warna_kereta");

			$data_update = array(
				'jenis_kereta' => $jenisKereta,
				'jenama_kereta' => $jenamaKereta,
				'warna_kereta' => $warnaKereta
			);

			$return_data = $this->m_kereta->save_edit_kereta($data_update,$idDecrypt);

			$this->session->set_flashdata('msg', 'Kemaskini Berjaya');

			redirect(site_url("demo/edit_kereta/".$idEnc));
		}
		else {

			$this->session->set_flashdata('msg2', 'Kemaskini Tidak Berjaya');

			redirect(site_url("demo/edit_kereta/".$idEnc));
		}
		
		// echo "<pre>";
		// print_r($data_save);
		// echo "</pre>";
		// die();
	}

	public function delete_kereta($idEnc)
	{
		$idDecrypt = decryptInUrl($idEnc);

		$return_data = $this->m_kereta->delete_kereta($idDecrypt);

		$this->session->set_flashdata('msg', 'Data Berjaya dipadam');

		redirect(site_url("demo"));
	}
}
