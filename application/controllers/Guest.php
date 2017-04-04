<?php

/**
 * Created by PhpStorm.
 * User: alok
 * Date: 25/03/17
 * Time: 6:42 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('users_model','users');
    }
    public function index()
    {
        //echo "Welcome to guest controller";
        $this->load->view('home');
        //exit();
    }
}