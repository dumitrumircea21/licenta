<?php

class AccountController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in_user']))
        {
            $this->session->set_flashdata('error', 'You need to login in order to access the account page');
            redirect('login', 'refresh');
        }

    }

    public function index()
    {
        $data = [];

        $this->db->select('*');
        $this->db->from('Contests');
        $this->db->where([
            'user_id' => $_SESSION['user_id']
        ]);
        $query = $this->db->get();
        $contests = $query->result();

        $data['contests'] = $contests;

        $this->load->view('dashboard/index', $data);
    }
}