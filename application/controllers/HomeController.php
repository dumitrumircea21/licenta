<?php
/**
 * Created by PhpStorm.
 * User: Dorinel
 * Date: 01.09.2018
 * Time: 15:50
 */

class HomeController extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home/index');
        $this->load->view('footer');
    }
}