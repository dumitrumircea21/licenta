<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function index()
    {
        $data = [
            'user_name' => isset($_POST['username']) ? $_POST['username'] : null,
            'password' => isset($_POST['password']) ? md5($_POST['password']) : null,
        ];

        if (isset($_POST['register']))
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[5]|matches[password]');

            if ($this->form_validation->run() == true)
            {
                $this->db->insert('Users', $data);
                $this->session->set_flashdata('success', 'Your account have ben created with success');
                redirect('/register','refresh');
            }
        }

        $this->load->view('header');
        $this->load->view('register/index', $data);
        $this->load->view('footer');
    }
}