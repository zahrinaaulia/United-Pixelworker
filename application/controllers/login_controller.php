
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

		$data = array(
			'Email' =>$this->input->post('Email'),
			'Password'=> $this->input->post('Password')
		);

		$email_check = $this->login_model->email_check($data['Email']);

		if($email_check){
			$this->login_model->register_user($data);
			$this->session->set_flashdata('success_msg','Register successfully');
			redirect('login_controller/profilenew');
		} else{
			$this->session->set_flashdata('error_msg','Error occured, Try again');
			redirect('login_controller/signup_view');
		}

	}

	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
				'email' => $email,
				'password' => $password
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

	public function update() {



		$this->login_model->update_user();

		redirect('login_controller/profilenew');



	}




	public function loggout(){

		 $this->session->sess_destroy();
		 redirect(base_url());

	}

}
