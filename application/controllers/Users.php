<?php

/**
 * Created by PhpStorm.
 * User: alok
 * Date: 25/03/17
 * Time: 8:32 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('users_model','users');
    }

    public function index()
    {
        $this->load->view('signin_form');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'email id ', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == FALSE):
            $this->load->view('signin_form');
        else :
            $email     = $this->input->post('email');
            $password  = md5($this->input->post('password'));
            $log_users = $this->users->user_login($email,$password);
            if(is_object($log_users)) :
                $session_data=array('user_name'=>$log_users->name,
                    'session_id'=>$log_users->id);
                $this->session->set_userdata('user_session_info', $session_data);
                redirect(site_url('users/profile'));
            else :
                $this->session->set_flashdata('error', 'Invalid username or password.');
                $this->load->view('signin_form');
            endif;
        endif;
    }

    public function signup()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('new_password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation',
            'trim|required|matches[new_password]');
        $this->form_validation->set_rules('user_email', 'Email',
            'required|is_unique[user_registration.email]');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');

        if ($this->form_validation->run() == FALSE):
            $this->load->view('signin_form');
        else :
            $data = array(
                'name'=>$this->input->post('username'),
                'email'=>$this->input->post('user_email'),
                'password'=>md5($this->input->post('new_password')),
            );
            $this->db->insert('user_registration',$data);
            unset($_POST);
            $this->session->set_flashdata('message', 'Successfully register.');
            redirect(site_url('users'));
        endif;
    }

    public function profile()
    {
        if($this->session->userdata['user_session_info']) :
            $session_info = $this->session->userdata['user_session_info'];
            $this->data['user_information'] = $this->users->get_user(
                $session_info['session_id']);
            $this->load->view('profile',$this->data);
        else :
            $this->session->set_flashdata('error', 'Please login before access this page.');
            redirect(site_url('users'));
        endif;
    }

    public function logout()
    {
        $this->session->unset_userdata('user_session_info');
        redirect(site_url('users'));

    }

}