<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		$data["title"] = "Welcome";
		$this->load->view('includes/true_header',$data);

		$data["user"] = "none";
		$this->load->view('includes/header',$data);

		$data["message_std"] = "";
		$data["message_adm"] = "";

		$this->load->view('login_view',$data);
		$this->load->view('includes/footer');
		$this->load->view('includes/true_footer');
	}
	
	private function print_page($title,$user,$message_std,$message_adm)
	{
		$data["title"] = $title;
		$this->load->view('includes/true_header',$data);

		$data["user"] = $user;
		$this->load->view('includes/header',$data);
		
		$data["message_std"] = $message_std;
		$data["message_adm"] = $message_adm;
		
		$this->load->view('login_view',$data);
		$this->load->view('includes/footer');
		$this->load->view('includes/true_footer');
	}
	
	public function login_as_student()
	{
		$username = $this->input->post('stdUsername');
		$password = $this->input->post('stdPassword');
		
		$message_std = "";
		$message_adm = "";
		
		if ($username != FALSE  && $password != FALSE)
		{
			$this->load->model("Korisnik_Model");
			
			$data = $this->Korisnik_Model->get_user_type($username,$password); // funkcija koja proverava podatke u bazi

			if ($data != null)
			{
				if ($data["tip"] === "posetilac")
				{
					/*	$sess_array = array(
					 'username' => "misko",
					   'user_agent' => "agent misko",
					   'ip_address' => "adresica",
				   );
					*/
					//$this->session->set_flashdata(  'message' ,'postoji sesija!');
					$message_std = 'postoji sesija!';
					
					$this->print_page('Welcome','none',$message_std,$message_adm);
					$this->redirect('/welcome/index', 'refresh');
				}
			}
			else
			{
				$message_std = 'Морате унети оба поља коректно!';
				
				//$this->session->set_flashdata( 'message', 'Морате унети оба поља коректно!'); 
				//redirect('welcome/index', 'refresh');
				$this->print_page('Welcome','none',$message_std,$message_adm);
			}
		}
		else
		{
			$message_std = 'Морате унети оба поља коректно!';
			//$this->session->set_flashdata('message' , 'Морате унети оба поља коректно!'); 
			//redirect('index', 'refresh');
			$this->print_page('Welcome','none',$message_std,$message_adm);
		}
		
		
	}
	
	public function login_as_admin()
	{
		$username = $this->input->post('admUsername');
		$password = $this->input->post('admPassword');

		$message_std = "";
		$message_adm = "";

		if ($username != FALSE  && $password != FALSE)
		{
			$this->load->model("Korisnik_model"); 
			
			$user = $this->Korisnik_model->get_user_type($username,$password);

			if ($user != null)
			{
				if ($user["tip"] === "administrator")
				{
					$this->session->set_userdata( 'korisnicko_ime' , $user["korisnicko_ime"] );
					$this->session->set_userdata( 'tip' , $user["tip"] );
					//$message_adm = 'postoji sesija!';
					//$this->print_page('Welcome','none',$message_std,$message_adm);
					redirect('admin_controller/index');
				}
			}
			else
			{
				$message_adm = 'Морате унети оба поља коректно!';
				$this->print_page('Welcome','none',$message_std,$message_adm);
			}
		}
		else
		{
			$message_adm = 'Морате унети оба поља коректно!';
			$this->print_page('Welcome','none',$message_std,$message_adm);
		}
	}

	public function admin_view()
	{
		if (!$this->session->userdata('username')) // da li sesija postoji
		{
			echo "ne radi";
		}
		else
		{
			echo $this->session->userdata('username');
			/*
			$array_items = array(
                            'user_id'       => '',
                            'username'      => '',
                            'groupid'       => ''
                    );

			$this->session->unset_userdata($array_items);
			*/
			$this->session->sess_destroy();
		}
	}
	
	public function logout()
	{
		if (!$this->session->userdata('username')) // da li sesija postoji
		{
			echo "ne radi";
		}
		else
		{
			echo $this->session->userdata('username');
			/*
			$array_items = array(
                            'user_id'       => '',
                            'username'      => '',
                            'groupid'       => ''
                    );

			$this->session->unset_userdata($array_items);
			*/
			$this->session->sess_destroy();
		}
	}
}
