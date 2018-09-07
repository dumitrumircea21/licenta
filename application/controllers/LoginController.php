<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function index()
    {
        $data = [
            'user_name' => isset($_POST['username']) ? $_POST['username'] : null,
            'password' => isset($_POST['password']) ? md5($_POST['password']) : null,
        ];

        if (isset($_POST['login']))
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

            if ($this->form_validation->run() == true)
            {
                $this->db->select('*');
                $this->db->from('Users');
                $this->db->where([
                    'user_name' => $data['user_name'],
                    'password' => $data['password'],
                ]);
                $query = $this->db->get();
                $user = $query->row();

                if (isset($user))
                {
                    $_SESSION['logged_in_user'] = true;
                    $_SESSION['user_name'] = $user->user_name;
                    $_SESSION['user_id'] = $user->user_id;

                    redirect('account');

                } else {
                    $this->session->set_flashdata('error', 'User or Password is Invalid');
                }
            }
        }

        $this->load->view('header');
        $this->load->view('login/index');
        $this->load->view('footer');
    }

    public function logout()
    {
        session_destroy();
        redirect('login', 'refresh');
    }
}