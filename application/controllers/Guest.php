<?php

/**
 * Created by PhpStorm.
 * User: alok
 * Date: 25/03/17
 * Time: 6:42 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    public function index()
    {
        //echo "Welcome to guest controller";
        $this->load->view('home');
        //exit();
    }
}