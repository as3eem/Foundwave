<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 26/9/17
 * Time: 5:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        redirect(base_url());
    }

    function signup(){
        $this->load->view('navbar');
        $this->load->view('signup');
        $this->load->view('footer');
    }

    function login(){
        $this->load->view('navbar');
        $this->load->view('login');
        $this->load->view('footer');
    }

    function signupProcess(){
        $data['first_name']=$this->input->post('first_name');
        $data['last_name']=$this->input->post('last_name');
        $data['email']=$this->input->post('email');
        $data['pwd']=$this->input->post('password');
        $submit=$this->input->post('sss');
        if ($submit == 'Register') {

            $this->mongo_db->insert('user', array(
                'firstName' => $data['first_name'],
                'lastName' => $data['last_name'],
                'password' => $data['pwd'],
                'email'=>$data['email']
            ));
            $sessiondata = array(
                'email' => $data['email'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sessiondata);
        }
        redirect(base_url('user/claimLost'));
    }

    function loginProcess(){
        $usr=$this->input->post('username');
        $pwd=$this->input->post('password');
        $submit=$this->input->post('log');
        if ($submit=='Login'){
            $check=$this->mongo_db->get_where('user', array('email'=>$usr, 'password'=>$pwd));
            if (sizeof($check)>0){
                $this->session->sess_destroy();
                $sessiondata = array(
                    'email' => $usr,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sessiondata);
                redirect(base_url("user/index"));
            }
            else{
                $this->load->view('navbar');
                $this->load->view('errorLogin');
                $this->load->view('login');
                $this->load->view('footer');
            }
        }
    }

    function claimLost(){
        $this->load->view('navbar');
        $this->load->view('searchItem');
        $this->load->view('footer');
    }

    function lostProcess(){
        $search=$this->input->post('search');
        $search=strtolower($search);
        $check=$this->mongo_db->get_where('record', array('name'=>$search));
        $this->load->view('navbar');
        for($i=0;$i<sizeof($check);$i++){
            $data['name']=$check[$i]['name'];
            $data['date']=$check[$i]['dateFound'];
            $data['phone']=$check[$i]['phone'];
            $data['email']=$check[$i]['email'];
            $data['landmark']=$check[$i]['landmark'];
            $data['description']=$check[$i]['description'];
            $this->load->view('item',$data);
            }
        $this->load->view('footer');
    }

    function claimFound(){
        $this->load->view('navbar');
        $this->load->view('foundClaim');
        $this->load->view('footer');
    }

    function foundProcess(){
        $data['name']=$this->input->post('name');
        $data['name']=strtolower($data['name']);
        $data['phone']=$this->input->post('phone');
        $data['dateFound']=$this->input->post('date');
        $data['email']=$this->input->post('email');
        $data['landmark']=$this->input->post('landmark');
        $data['description']=$this->input->post('description');
        $submit=$this->input->post('singlebutton');
        if ($submit == 'Submit') {

            $this->mongo_db->insert('record', array(
                'name' => $data['name'],
                'dateFound' => $data['dateFound'],
                'email' => $data['email'],
                'landmark'=>$data['landmark'],
                'phone' => $data['phone'],
                'description' => $data['description'],
                'pic' => $data['pic']
            ));
            redirect(base_url("user/thankNote"));

        }
    }

    //////////////////////
    function test()
    {

        $this->load->view('navbar');
        $this->load->view('test');
        $this->load->view('footer');
    }


    function thankNote()
    {

        $this->load->view('navbar');
        $this->load->view('thankNote');
        $this->load->view('footer');
    }

    function contactFounder(){
        $data['email']=$this->input->post('email');
        $but=$this->input->post('submit');
        if ($but=='GO FOR IT!'){
            $this->load->view('navbar');
            $this->load->view('contact',$data);
            $this->load->view('footer');
        }
    }

    function mailFounder(){
        $to=$this->input->post('x');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $msg=$this->input->post('mesage');
        $but=$this->input->post('submit');
        if ($but=='Send Mail'){
            $this->_confirmationMail($to,$msg);
        }
    }

    function _confirmationMail($m,$msg){
        //Load email library
        $this->load->library('email');

        //SMTP & mail configuration
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'aseem2707@gmail.com',
            'smtp_pass' => 'Contrasena1',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        $this->email->from('aseem2707@gmail.com', 'Foundwave');
        $this->email->to($m);
        $this->email->subject('Your Foundwave claim has been successful');
        $this->email->message($msg);
        $this->email->send();
        $this->load->view('navbar');
        $this->load->view('confirmation');
        $this->load->view('footer');
    }

    function policeConnect(){
        $this->load->view('navbar');
        $this->load->view('underConstruction');
        $this->load->view('footer');
    }
}
