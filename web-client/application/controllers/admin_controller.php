<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{
	public function index()
	{		
		if (null !== $this->session->userdata('tip'))
		{
			if ($this->session->userdata('tip') === "administrator")
			{
				//$this->load->view("admin_view");
				//echo $this->session->userdata('korisnicko_ime');
                $data['acc_message'] = '';
				$this->print_page("Admin",'admin_view',"");
			}
			else
			{
				echo "Приступ страници није могућ";
			}
		}
	}
	
	private function print_page($title,$view_name,$message)
	{
		$data["title"] = $title;
		$this->load->view('includes/true_header',$data);

		//$data["user"] = $user;
		$this->load->view('includes/header',$data);
		
		$data["message"] = $message;
		/*
		$data["message_adm"] = $message_adm;
		*/
		$this->load->view($view_name,$data);
		
		//$this->load->view('zezanje');
		//$this->load->view('welcome_view');
		$this->load->view('includes/footer');
		$this->load->view('includes/true_footer');
	}
	
	public function add_news_page()
	{
		$this->print_page('Admin','add_news_view',"");
	}
	
	public function create_account_page()
	{
		$this->print_page('Admin','create_account_view','');
	}
	
	public function create_account()
	{

		$index = $this->input->post('index');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

        if($confirm_password != $password)
        {
            $this->print_page('Admin','create_account_view',"Sifre se moraju poklapati...");
        }


		
		$korisnik = array(
			'korisnicko_ime' => $index,
			'lozinka' => $password,
			'tip' => 'posetilac'
		);

		$this->load->model("Korisnik_model");
		
		$this->Korisnik_model->insert_new_user($korisnik);
		
		redirect('admin_controller/index');
	}
	
	public function up()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$file_name = 'C:/wamp/www/EasyHysteria/pdfs/'.date("Y-m-d_H-i-s").'-'.$_FILES['file']['name'];
		$datum_tip = '%YYYY-%mm-%dd';
        $datum = mdate($datum_tip);
		$allowedExts = array("pdf");
		
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		if (($_FILES['file']['type'] == "application/pdf")
		&& ($_FILES["file"]["size"] < 2000000000)
		&& in_array($extension, $allowedExts))
		{
		 if ($_FILES["file"]["error"] > 0)
		 {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		 }
		 else
		 {	
		   if (!file_exists("pdfs/" . $_FILES["file"]["name"]))
		   {
				
				move_uploaded_file($_FILES["file"]["tmp_name"],
				// "pdfs/" . $_FILES["file"]["name"]);
				//'C:/wamp/www/EasyHysteria/pdfs/' . $admin . $time.$_FILES["file"]["name"].'\'' );
				$file_name);
				echo "sdfdfsdfsd";
				
				
		   }
		 }

		}

        $info = array(
            'naslov' => $title,
            'sadrzaj' => $content,
            'tip' => 'opste',
            'datum' => $datum,
            'link' => $file_name
        );

        $this->load->model('Obavestenje_model');
        $this->Obavestenje_model->insert_information($info);

        redirect('admin_controller/index');

    }

    public function show_requests()
    {
        $this->load->model('Zahtev_model');
        $this->Zahtev_model->gett_all_requests();

    }

    public function view_requests_page()
    {
        $this->print_page('Admin','view_requests_view',"");
    }



}