<?php

class Posts extends CI_Controller {
	public function index() {
		$data['title'] = 'Latest Posts';

		$data['posts'] = $this->Post_model->get_posts();

		// print_r($data['posts']);

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL) {
		$data['post'] = $this->Post_model->get_posts($slug);

		if( empty($data['post']) ) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');

		$data['title'] = $data['post']['title'];
	}

	public function create() {

		$data['title'] = 'Create Post';

		$data['categories'] = $this->Post_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');			
		}
		else {
			//Upload image
			$config['upload_path'] = './assets/images/posts';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '500';
			$config['max_height'] = '500';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()) {
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			}
			else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->Post_model->create_post($post_image);
			redirect('posts');
		}
	}

	public function delete($id) {
		// echo $id;
		$this->Post_model->delete_post($id);
		redirect('posts');
	}

	public function edit($slug) {
		$data['post'] = $this->Post_model->get_posts($slug);

		if( empty($data['post']) ) {
			show_404();
		}

		$data['title'] = 'Edit Post';

		$data['categories'] = $this->Post_model->get_categories();

		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update() {
		$this->Post_model->update_post();
		redirect('posts');
	}


}