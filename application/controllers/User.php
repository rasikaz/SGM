<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent :: __construct();
        $this->load->model('User_Update_model');

    }

    public function index()
    {
        if (!$this->session->userdata('logged')) {
            echo "You are not logged....";

            redirect('login');
        }else {
            $this->load->view('template/header');


            if($this->session->userdata('version')=='Teacher'){

                $data = array(
                    'active' => 'dashboard'
                );

                $this->load->view('template/side_bar', $data);
            }
            else{
                $data = array(
                    'active' => 'dashboard'
                );

                $this->load->view('template/side_barStudent', $data);
            }


            $this->load->view('pages/user');

            $this->load->view('template/footer');



        }
    }
    public function userChange()
    {
        $username =  $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->session->userdata('user');
        $index = $user[0]['index'];

        $res = $this->User_Update_model->changePassword($username, $password, $index);

        if ($res==1) {
            echo "Password Changed!";
        }else {
            echo "Password Changing Failed!";
        }
    }

    public function userDataChange()
    {
        $fName =  $this->input->post('fName');
        $lName = $this->input->post('lName');
        $address = $this->input->post('address');
        $telephone = $this->input->post('telephone');
        $user = $this->session->userdata('user');
        $index = $user[0]['index'];

        $res = $this->User_Update_model->changeUserData($fName, $lName, $address, $telephone, $index);

        if ($res==1) {
            echo "Data Changed!";
        }else {
            echo "Data Changing Failed!";
        }
    }

}
