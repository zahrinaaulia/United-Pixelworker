
<?php

class login_controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');

	}

	public function index(){
		$this->load->view('home');
	}

	public function login_view(){
		$this->load->view('login_view');
	}

	public function profilenew(){
		$this->load->view('profilenew');
	}

	public function register_view(){
		$this->load->view('signup_view');
	}

	public function register(){






	}
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
				'email' => $email,
				'password' => md5($password)
		);
		$cek =$this->login_model->cek_log('akun',$where)->row();
		$query = $this->db->query("SELECT * FROM akun where email ='$email'");
		if($cek > 0 ){
			foreach ($query->result() as $row) {
				$data_session = array(
					'yourname' => $row->Yourname,
					'twitter' => $row->Twitter,
					'Instagram' => $row->Instagram,
					'website' => $row->Website,
					'location' => $row->Location,
					'email' => $email,
					'status' => "login"
				);

			}
			$this->session->set_userdata($data_session);

			redirect(base_url());
		} else{
			echo "Username anda salah !"; ?>
			<form>
				<input type="button" value="Kembali" onclick="history.back()">
			</form>
			<?php
		}

	}

	public function loggout(){

		 $this->session->sess_destroy();
		 redirect(base_url());

	}

}
