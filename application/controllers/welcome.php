<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$this->load->view('index');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function single(){
		$this->load->view('single');
	}
	public function message(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$content = $this->input->post('content');
		if ($username == '' || $email == '' || $content == '') {
			echo 'fail';
		} else {
			$this->load->model('message_model');
			$this->message_model->save($username, $email, $content);
			echo 'success';
		}
	}
	public function welcome_mgr(){
		$this->load->model('message_model');
		$result = $this->message_model->get_all();
			$data = array(
					'messages' => $result
			);
			$this->load->view('welcome-mgr',$data);
	}

	public function delete_message(){
		$message_id = $this->input->get('message_id');
		$this->load->model('message_model');
		$this->message_model->delete($message_id);
		$this->welcome_mgr();
	}

	public  function check_name(){
		$uname = $this -> input -> get('uname');
		$this -> load -> model('message_model');
		$row = $this -> message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}

	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
				'data' => $result,
				'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}


	public function comment(){
		$comm_name = $this->input->post('comm_name');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$subject = $this->input->post('subject');
		$this->load->model('comment_model');
		$this->comment_model->save($comm_name, $email, $website,$subject);
		$this->single_message();

//		if ($comm_name == '' || $email == '' || $subject == '') {
//			echo 'fail';
//		} else {
//			$this->load->model('comment_model');
//			$this->comment_model->save($comm_name, $email, $website, $subject);
//			$this->load->view('single');
//		}
	}
	public function comment_mgr(){
		$this->load->model('comment_model');
		$result = $this->comment_model->get_all();
		$data = array(
				'comments' => $result
		);
		$this->load->view('comment-mgr',$data);
	}

	public function delete_comment(){
		$comm_id = $this->input->get('comm_id');
		$this->load->model('comment_model');
		$this->comment_model->delete($comm_id);
		$this->comment_mgr();
	}

	public function single_message(){
		$this->load->model('comment_model');
		$result=$this->comment_model->get_all();
		$data = array(
			'messages'=> $result
		);
		$this->load->view('single',$data);

	}

}

